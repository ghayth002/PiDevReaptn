<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Response;

class PDFReportService extends \FPDF
{
    private const COLORS = [
        'primary' => [41, 128, 185],    // Blue
        'secondary' => [52, 152, 219],  // Light Blue
        'success' => [46, 204, 113],    // Green
        'warning' => [241, 196, 15],    // Yellow
        'danger' => [231, 76, 60],      // Red
        'text' => [44, 62, 80],         // Dark Gray
        'subtext' => [127, 140, 141],   // Light Gray
        'border' => [189, 195, 199],    // Very Light Gray
        'white' => [255, 255, 255]      // White
    ];

    public function generateReport(array $data, string $type): Response
    {
        // Add first page
        $this->AddPage();

        // Add header
        $this->addHeader($type);

        // Add content based on type
        if ($type === 'dashboard') {
            $this->addDashboardContent($data);
        } else {
            $this->addGenericContent($data, $type);
        }

        // Add footer
        $this->addFooter();

        // Generate PDF content
        $pdfContent = $this->Output('S');
        
        // Create response
        $response = new Response($pdfContent);
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', sprintf(
            'attachment; filename="fruitables_%s_report_%s.pdf"',
            $type,
            date('Y-m-d_H-i-s')
        ));
        
        return $response;
    }

    private function addHeader(string $type): void
    {
        $this->SetFont('Arial', 'B', 20);
        $this->Cell(0, 20, $this->getReportTitle($type), 0, 1, 'C');
        
        $this->SetFont('Arial', '', 12);
        $this->Cell(0, 10, 'Generated on: ' . date('F j, Y H:i:s'), 0, 1, 'C');
        
        $this->Line(10, $this->GetY() + 5, 200, $this->GetY() + 5);
        $this->Ln(10);
    }

    private function addDashboardContent(array $data): void
    {
        // Executive Summary Section
        $this->SetFont('Arial', 'B', 16);
        $this->Cell(0, 15, 'Executive Summary', 0, 1, 'L');

        if (isset($data['summary'])) {
            $this->SetFont('Arial', '', 12);
            foreach ($data['summary'] as $label => $value) {
                $this->Cell(80, 10, $label . ':', 0, 0);
                $this->Cell(0, 10, $value, 0, 1);
            }
        }

        $this->Ln(10);

        // Products Section
        if (isset($data['products']) && !empty($data['products'])) {
            $this->AddPage();
            $this->SetFont('Arial', 'B', 16);
            $this->Cell(0, 15, 'Product Analysis', 0, 1, 'L');

            $this->SetFont('Arial', 'B', 11);
            // Set headers
            $headers = array_keys($data['products'][0]);
            $width = 190 / count($headers);
            foreach ($headers as $header) {
                $this->Cell($width, 10, $header, 1, 0, 'C');
            }
            $this->Ln();

            // Set data
            $this->SetFont('Arial', '', 10);
            foreach ($data['products'] as $product) {
                foreach ($product as $value) {
                    $this->Cell($width, 10, $value, 1, 0, 'C');
                }
                $this->Ln();
            }
        }

        // Stock Status Section
        if (isset($data['stock_status']) && !empty($data['stock_status'])) {
            $this->AddPage();
            $this->SetFont('Arial', 'B', 16);
            $this->Cell(0, 15, 'Stock Status', 0, 1, 'L');

            $this->SetFont('Arial', 'B', 11);
            $headers = array_keys($data['stock_status'][0]);
            $width = 190 / count($headers);
            foreach ($headers as $header) {
                $this->Cell($width, 10, $header, 1, 0, 'C');
            }
            $this->Ln();

            $this->SetFont('Arial', '', 10);
            foreach ($data['stock_status'] as $stock) {
                foreach ($stock as $value) {
                    $this->Cell($width, 10, $value, 1, 0, 'C');
                }
                $this->Ln();
            }
        }

        // Low Stock Alerts Section
        if (isset($data['low_stock_alerts']) && !empty($data['low_stock_alerts'])) {
            $this->AddPage();
            $this->SetFont('Arial', 'B', 16);
            $this->Cell(0, 15, 'Low Stock Alerts', 0, 1, 'L');

            $this->SetFont('Arial', 'B', 11);
            $headers = array_keys($data['low_stock_alerts'][0]);
            $width = 190 / count($headers);
            foreach ($headers as $header) {
                $this->Cell($width, 10, $header, 1, 0, 'C');
            }
            $this->Ln();

            $this->SetFont('Arial', '', 10);
            foreach ($data['low_stock_alerts'] as $alert) {
                foreach ($alert as $value) {
                    $this->Cell($width, 10, $value, 1, 0, 'C');
                }
                $this->Ln();
            }
        }
    }

    private function addGenericContent(array $data, string $type): void
    {
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(0, 10, 'Data Overview', 0, 1, 'L');

        if (!empty($data)) {
            $this->SetFont('Arial', 'B', 11);
            $headers = array_keys($data[0]);
            $width = 190 / count($headers);
            foreach ($headers as $header) {
                $this->Cell($width, 10, $header, 1, 0, 'C');
            }
            $this->Ln();

            $this->SetFont('Arial', '', 10);
            foreach ($data as $row) {
                foreach ($row as $value) {
                    $this->Cell($width, 10, $value, 1, 0, 'C');
                }
                $this->Ln();
            }
        }
    }

    private function addFooter(): void
    {
        $this->SetY(-30);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Generated by Fruitables Management System', 0, 1, 'C');
        $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
    }

    private function getReportTitle(string $type): string
    {
        return match ($type) {
            'dashboard' => 'Dashboard Overview Report',
            'products' => 'Products Inventory Report',
            'product-types' => 'Product Types Summary Report',
            'stocks' => 'Stock Management Report',
            default => ucfirst($type) . ' Report'
        };
    }
} 