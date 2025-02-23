<?php

namespace App\Service;

use App\Entity\Product;
use App\Entity\ProductType;
use App\Entity\Stock;
use FPDF;

class ReportService
{
    private const PAGE_WIDTH = 210;
    private const PAGE_MARGIN = 10;
    private const CONTENT_WIDTH = 190;

    public function generateFullReport(array $data, array $charts): string
    {
        $pdf = new FPDF();
        
        // Cover page
        $this->addCoverPage($pdf);
        
        // Executive summary
        $this->addExecutiveSummary($pdf, $data);
        
        // Charts
        $this->addChartsSection($pdf, $charts);
        
        // Detailed analysis
        $this->addDetailedAnalysis($pdf, $data);
        
        // Stock status
        $this->addStockStatus($pdf, $data);
        
        // Recommendations
        $this->addRecommendations($pdf, $data);
        
        return $pdf->Output('S');
    }

    private function addCoverPage(FPDF $pdf): void
    {
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 24);
        
        // Title
        $pdf->Cell(0, 20, 'Fruitables', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 10, 'Management System Report', 0, 1, 'C');
        
        // Date
        $pdf->Ln(20);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, 'Generated on: ' . date('F j, Y'), 0, 1, 'C');
        
        // Company info
        $pdf->Ln(40);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, 'Fruitables Management System', 0, 1, 'C');
        $pdf->Cell(0, 10, 'Inventory and Stock Analysis', 0, 1, 'C');
    }

    private function addExecutiveSummary(FPDF $pdf, array $data): void
    {
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 15, 'Executive Summary', 0, 1, 'L');
        
        $pdf->SetFont('Arial', '', 11);
        $pdf->MultiCell(0, 10, 'This report provides a comprehensive analysis of the current inventory status, stock levels, and product distribution across different categories and seasons.', 0, 'L');
        
        $pdf->Ln(5);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 10, 'Key Metrics:', 0, 1, 'L');
        
        $pdf->SetFont('Arial', '', 11);
        $metrics = [
            ['Total Products', $data['stats']['total_products']],
            ['Total Inventory Value', '€' . $data['stats']['total_value']],
            ['Stock Health', $data['stats']['stock_health'] . '%'],
            ['Low Stock Items', $data['stats']['low_stock_count']]
        ];
        
        foreach ($metrics as $metric) {
            $pdf->Cell(60, 8, $metric[0] . ':', 0, 0, 'L');
            $pdf->Cell(0, 8, $metric[1], 0, 1, 'L');
        }
    }

    private function addChartsSection(FPDF $pdf, array $charts): void
    {
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 15, 'Visual Analysis', 0, 1, 'L');
        
        foreach ($charts as $title => $imageData) {
            if ($imageData) {
                $pdf->AddPage();
                $pdf->SetFont('Arial', 'B', 14);
                $pdf->Cell(0, 10, $this->formatChartTitle($title), 0, 1, 'C');
                
                // Save chart image to temporary file
                $tempFile = tempnam(sys_get_temp_dir(), 'chart');
                file_put_contents($tempFile, base64_decode(str_replace('data:image/png;base64,', '', $imageData)));
                
                // Add chart to PDF
                $pdf->Image($tempFile, 10, 40, 190);
                unlink($tempFile);
                
                // Add chart description
                $pdf->Ln(160);
                $pdf->SetFont('Arial', '', 11);
                $pdf->MultiCell(0, 5, $this->getChartDescription($title), 0, 'L');
            }
        }
    }

    private function addDetailedAnalysis(FPDF $pdf, array $data): void
    {
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 15, 'Detailed Analysis', 0, 1, 'L');
        
        // Seasonal Analysis
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(0, 10, 'Seasonal Distribution', 0, 1, 'L');
        $pdf->SetFont('Arial', '', 11);
        $pdf->MultiCell(0, 5, 'Analysis of product distribution across seasons shows the following patterns...', 0, 'L');
        
        // Production Methods
        $pdf->Ln(10);
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(0, 10, 'Production Methods', 0, 1, 'L');
        $pdf->SetFont('Arial', '', 11);
        $pdf->MultiCell(0, 5, 'The distribution of production methods indicates...', 0, 'L');
        
        // Value Analysis
        $pdf->Ln(10);
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(0, 10, 'Value Analysis', 0, 1, 'L');
        $pdf->SetFont('Arial', '', 11);
        $pdf->MultiCell(0, 5, 'The analysis of product values shows the following distribution...', 0, 'L');
    }

    private function addStockStatus(FPDF $pdf, array $data): void
    {
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 15, 'Stock Status', 0, 1, 'L');
        
        if (!empty($data['low_stock_alerts'])) {
            $pdf->SetFont('Arial', 'B', 14);
            $pdf->Cell(0, 10, 'Critical Items', 0, 1, 'L');
            
            $pdf->SetFont('Arial', '', 10);
            $headers = ['Product', 'Current Stock', 'Minimum', 'Status', 'Action'];
            $widths = [50, 30, 30, 30, 50];
            
            // Headers
            foreach (array_combine($headers, $widths) as $header => $width) {
                $pdf->Cell($width, 7, $header, 1);
            }
            $pdf->Ln();
            
            // Data
            foreach ($data['low_stock_alerts'] as $alert) {
                $pdf->Cell(50, 6, $alert['product'], 1);
                $pdf->Cell(30, 6, $alert['current_stock'], 1);
                $pdf->Cell(30, 6, $alert['minimum_stock'], 1);
                $pdf->Cell(30, 6, $alert['status'], 1);
                $pdf->Cell(50, 6, $alert['action'], 1);
                $pdf->Ln();
            }
        }
    }

    private function addRecommendations(FPDF $pdf, array $data): void
    {
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 15, 'Recommendations', 0, 1, 'L');
        
        $pdf->SetFont('Arial', '', 11);
        
        // Stock Management
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 10, 'Stock Management:', 0, 1, 'L');
        $pdf->SetFont('Arial', '', 11);
        if ($data['stats']['stock_health'] < 80) {
            $pdf->MultiCell(0, 5, '- Immediate attention needed for inventory levels\n- Review minimum stock levels\n- Implement automated reordering system', 0, 'L');
        } else {
            $pdf->MultiCell(0, 5, '- Current stock levels are well maintained\n- Continue monitoring seasonal variations\n- Consider optimizing storage capacity', 0, 'L');
        }
        
        // Seasonal Planning
        $pdf->Ln(5);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 10, 'Seasonal Planning:', 0, 1, 'L');
        $pdf->SetFont('Arial', '', 11);
        $pdf->MultiCell(0, 5, '- Plan inventory based on seasonal demand\n- Adjust production methods according to season\n- Optimize storage conditions for each season', 0, 'L');
        
        // Value Optimization
        $pdf->Ln(5);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 10, 'Value Optimization:', 0, 1, 'L');
        $pdf->SetFont('Arial', '', 11);
        $pdf->MultiCell(0, 5, '- Focus on high-value products with good turnover\n- Review pricing strategy for slow-moving items\n- Consider bulk purchase opportunities for popular items', 0, 'L');
    }

    private function formatChartTitle(string $chartId): string
    {
        return match ($chartId) {
            'seasonal' => 'Seasonal Product Distribution',
            'methods' => 'Production Methods Analysis',
            'trends' => 'Stock Level Trends',
            'value' => 'Product Value Distribution',
            default => ucfirst($chartId) . ' Analysis'
        };
    }

    private function getChartDescription(string $chartId): string
    {
        return match ($chartId) {
            'seasonal' => 'This chart shows the distribution of products across different seasons, helping identify seasonal patterns and planning requirements.',
            'methods' => 'Analysis of different production methods used, showing the distribution and preferences in manufacturing processes.',
            'trends' => 'Current stock levels compared to minimum and maximum thresholds, highlighting potential issues and optimization opportunities.',
            'value' => 'Distribution of products by value ranges, helping identify high-value items and potential pricing optimizations.',
            default => 'Detailed analysis of the data showing important patterns and trends.'
        };
    }
} 