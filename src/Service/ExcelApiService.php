<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Response;

class ExcelApiService
{
    private const DOUBLE_LINE = ['═══════════════════════════════════════════════════════════════'];
    private const SINGLE_LINE = ['───────────────────────────────────────────────────────────────'];
    private const DOTTED_LINE = ['· · · · · · · · · · · · · · · · · · · · · · · · · · · · · · '];
    private const SECTION_BORDER_TOP = ['╔═══════════════════════════════════════════════════════╗'];
    private const SECTION_BORDER_BOTTOM = ['╚═══════════════════════════════════════════════════════╝'];
    private const SUBSECTION_BORDER_TOP = ['┌───────────────────────────────────────────────────────┐'];
    private const SUBSECTION_BORDER_BOTTOM = ['└───────────────────────────────────────────────────────┘'];

    private const ICONS = [
        'header' => '📊',
        'summary' => '📋',
        'products' => '📦',
        'types' => '🏷️',
        'stocks' => '📈',
        'warning' => '⚠️',
        'success' => '✅',
        'alert' => '🚨',
        'money' => '💰',
        'calendar' => '📅',
        'chart' => '📊',
        'season' => '🌺',
        'factory' => '🏭',
        'time' => '⏰'
    ];

    public function exportToExcel(array $data, string $type): Response
    {
        $output = fopen('php://temp', 'w+');
        fputs($output, "\xEF\xBB\xBF"); // UTF-8 BOM for Excel
        
        $this->addReportHeader($output, $type);
        $this->addTableOfContents($output);
        $this->addSummarySection($output, $data, $type);
        $this->addMainDataSection($output, $data);
        $this->addAnalyticsSection($output, $data, $type);
        $this->addReportFooter($output);
        
        rewind($output);
        $content = stream_get_contents($output);
        fclose($output);

        return $this->createResponse($content, $type);
    }

    private function addReportHeader($output, string $type): void
    {
        fputcsv($output, self::SECTION_BORDER_TOP);
        fputcsv($output, $this->formatHeaderRow($this->getTitle($type)));
        fputcsv($output, $this->formatHeaderRow('Fruitables Management System'));
        fputcsv($output, self::SECTION_BORDER_BOTTOM);
        
        fputcsv($output, []);
        fputcsv($output, $this->formatMetadataRow(self::ICONS['time'] . ' Generated on:', date('F j, Y H:i:s')));
        fputcsv($output, $this->formatMetadataRow(self::ICONS['calendar'] . ' Report Period:', 'Full Dataset'));
        fputcsv($output, []);
    }

    private function addTableOfContents($output): void
    {
        fputcsv($output, ['📑 TABLE OF CONTENTS']);
        fputcsv($output, self::DOTTED_LINE);
        fputcsv($output, ['1. Executive Summary']);
        fputcsv($output, ['2. Detailed Data']);
        fputcsv($output, ['3. Analytics & Insights']);
        fputcsv($output, ['4. Report Information']);
        fputcsv($output, []);
        fputcsv($output, self::DOUBLE_LINE);
        fputcsv($output, []);
    }

    private function addAnalyticsSection($output, array $data, string $type): void
    {
        fputcsv($output, self::SECTION_BORDER_TOP);
        fputcsv($output, ['3. ANALYTICS & INSIGHTS']);
        fputcsv($output, self::SECTION_BORDER_BOTTOM);
        fputcsv($output, []);

        switch ($type) {
            case 'products':
                $this->addProductAnalytics($output, $data);
                break;
            case 'product-types':
                $this->addProductTypeAnalytics($output, $data);
                break;
            case 'stocks':
                $this->addStockAnalytics($output, $data);
                break;
        }
    }

    private function addProductAnalytics($output, array $data): void
    {
        // Value Distribution
        fputcsv($output, [self::ICONS['money'] . ' Value Distribution Analysis']);
        fputcsv($output, self::SUBSECTION_BORDER_TOP);
        
        $priceRanges = $this->calculatePriceRanges($data);
        foreach ($priceRanges as $range => $count) {
            $percentage = ($count / count($data)) * 100;
            fputcsv($output, [
                $range,
                $count . ' products',
                sprintf('%.1f%%', $percentage),
                $this->generateBarChart($percentage)
            ]);
        }
        
        fputcsv($output, self::SUBSECTION_BORDER_BOTTOM);
        fputcsv($output, []);

        // Seasonal Trends
        fputcsv($output, [self::ICONS['season'] . ' Seasonal Product Distribution']);
        fputcsv($output, self::SUBSECTION_BORDER_TOP);
        
        $seasonalTrends = $this->calculateSeasonalTrends($data);
        foreach ($seasonalTrends as $season => $info) {
            fputcsv($output, [
                $season,
                sprintf('%d products (€%s total value)', $info['count'], number_format($info['value'], 2)),
                sprintf('%.1f%%', $info['percentage']),
                $this->generateBarChart($info['percentage'])
            ]);
        }
        
        fputcsv($output, self::SUBSECTION_BORDER_BOTTOM);
    }

    private function addProductTypeAnalytics($output, array $data): void
    {
        // Method Efficiency
        fputcsv($output, [self::ICONS['factory'] . ' Production Method Analysis']);
        fputcsv($output, self::SUBSECTION_BORDER_TOP);
        
        $methodStats = $this->calculateMethodStatistics($data);
        foreach ($methodStats as $method => $stats) {
            fputcsv($output, [
                $method,
                sprintf('%d types (%d products)', $stats['count'], $stats['products']),
                sprintf('%.1f%%', $stats['percentage']),
                $this->generateBarChart($stats['percentage'])
            ]);
        }
        
        fputcsv($output, self::SUBSECTION_BORDER_BOTTOM);
    }

    private function addStockAnalytics($output, array $data): void
    {
        // Stock Health Indicators
        fputcsv($output, [self::ICONS['chart'] . ' Stock Health Analysis']);
        fputcsv($output, self::SUBSECTION_BORDER_TOP);
        
        $healthStats = $this->calculateStockHealth($data);
        foreach ($healthStats as $status => $info) {
            $icon = $this->getStockStatusIcon($status);
            fputcsv($output, [
                $icon . ' ' . $status,
                sprintf('%d items (%.1f%%)', $info['count'], $info['percentage']),
                $this->generateBarChart($info['percentage'])
            ]);
        }
        
        fputcsv($output, self::SUBSECTION_BORDER_BOTTOM);
    }

    private function formatHeaderRow(string $text): array
    {
        return ['║ ' . str_pad($text, 55, ' ', STR_PAD_BOTH) . ' ║'];
    }

    private function formatMetadataRow(string $label, string $value): array
    {
        return [str_pad($label, 20) . ' ' . $value];
    }

    private function calculatePriceRanges(array $data): array
    {
        $ranges = [
            '€0-50' => 0,
            '€51-100' => 0,
            '€101-200' => 0,
            '€201+' => 0
        ];

        foreach ($data as $item) {
            $price = $item['Price'];
            if ($price <= 50) $ranges['€0-50']++;
            elseif ($price <= 100) $ranges['€51-100']++;
            elseif ($price <= 200) $ranges['€101-200']++;
            else $ranges['€201+']++;
        }

        return $ranges;
    }

    private function calculateSeasonalTrends(array $data): array
    {
        $trends = [];
        foreach ($data as $item) {
            $season = $item['Season'];
            if (!isset($trends[$season])) {
                $trends[$season] = ['count' => 0, 'value' => 0];
            }
            $trends[$season]['count']++;
            $trends[$season]['value'] += $item['Price'] * $item['Quantity'];
        }

        $total = count($data);
        foreach ($trends as &$info) {
            $info['percentage'] = ($info['count'] / $total) * 100;
        }

        return $trends;
    }

    private function calculateMethodStatistics(array $data): array
    {
        $stats = [];
        foreach ($data as $item) {
            $method = $item['Production Method'];
            if (!isset($stats[$method])) {
                $stats[$method] = ['count' => 0, 'products' => 0];
            }
            $stats[$method]['count']++;
            // Assuming each type has associated products
            $stats[$method]['products'] += isset($item['ProductCount']) ? $item['ProductCount'] : 1;
        }

        $total = count($data);
        foreach ($stats as &$info) {
            $info['percentage'] = ($info['count'] / $total) * 100;
        }

        return $stats;
    }

    private function calculateStockHealth(array $data): array
    {
        $health = [
            'Optimal' => ['count' => 0, 'percentage' => 0],
            'Warning' => ['count' => 0, 'percentage' => 0],
            'Critical' => ['count' => 0, 'percentage' => 0]
        ];

        $total = count($data);
        foreach ($data as $item) {
            $ratio = $item['Available Quantity'] / $item['Minimum Stock'];
            if ($ratio >= 0.8 && $ratio <= 1.2) $health['Optimal']['count']++;
            elseif ($ratio >= 0.5) $health['Warning']['count']++;
            else $health['Critical']['count']++;
        }

        foreach ($health as &$info) {
            $info['percentage'] = ($info['count'] / $total) * 100;
        }

        return $health;
    }

    private function getStockStatusIcon(string $status): string
    {
        return match ($status) {
            'Optimal' => self::ICONS['success'],
            'Warning' => self::ICONS['warning'],
            'Critical' => self::ICONS['alert'],
            default => '•'
        };
    }

    private function createResponse(string $content, string $type): Response
    {
        $response = new Response($content);
        $response->headers->set('Content-Type', 'text/csv; charset=UTF-8');
        $response->headers->set('Content-Disposition', sprintf(
            'attachment; filename="fruitables_%s_report_%s.csv"',
            $type,
            date('Y-m-d_H-i-s')
        ));
        return $response;
    }

    private function addReportFooter($output): void
    {
        fputcsv($output, []); // Spacing
        fputcsv($output, self::DOUBLE_LINE);
        fputcsv($output, ['Report Footer']);
        fputcsv($output, ['Generated on: ' . date('Y-m-d H:i:s')]);
        fputcsv($output, ['This report is system-generated and is valid at the time of generation.']);
        fputcsv($output, self::DOUBLE_LINE);
    }

    private function getTitle(string $type): string
    {
        $titles = [
            'products' => '📦 Products Inventory Report',
            'product-types' => '🏷️ Product Types Summary Report',
            'stocks' => '📊 Stock Management Report'
        ];

        return $titles[$type] ?? '📄 ' . ucfirst($type) . ' Report';
    }

    private function addSummarySection($output, array $data, string $type): void
    {
        fputcsv($output, ['EXECUTIVE SUMMARY']);
        fputcsv($output, self::SECTION_BORDER_TOP);
        fputcsv($output, self::SECTION_BORDER_BOTTOM);

        switch ($type) {
            case 'products':
                $this->addProductsSummary($output, $data);
                break;
            case 'product-types':
                $this->addProductTypesSummary($output, $data);
                break;
            case 'stocks':
                $this->addStocksSummary($output, $data);
                break;
        }

        fputcsv($output, []); // Spacing
    }

    private function addProductsSummary($output, array $data): void
    {
        // Key Metrics Section
        fputcsv($output, ['📊 KEY METRICS']);
        
        $totalProducts = count($data);
        $totalValue = array_reduce($data, function($carry, $item) {
            return $carry + ($item['Price'] * $item['Quantity']);
        }, 0);
        
        fputcsv($output, ['Total Products', $this->formatNumber($totalProducts)]);
        fputcsv($output, ['Total Inventory Value', $this->formatCurrency($totalValue)]);
        fputcsv($output, []);

        // Seasonal Analysis
        fputcsv($output, ['🌺 SEASONAL DISTRIBUTION']);
        $seasonCounts = $this->calculateSeasonalDistribution($data);
        foreach ($seasonCounts as $season => $count) {
            $percentage = ($count / $totalProducts) * 100;
            fputcsv($output, [
                $season,
                $count,
                sprintf('%.1f%%', $percentage),
                $this->generateBarChart($percentage)
            ]);
        }
        fputcsv($output, []);

        // Price Analysis
        fputcsv($output, ['💰 PRICE ANALYSIS']);
        $prices = array_column($data, 'Price');
        if (!empty($prices)) {
            fputcsv($output, ['Minimum Price', $this->formatCurrency(min($prices))]);
            fputcsv($output, ['Maximum Price', $this->formatCurrency(max($prices))]);
            fputcsv($output, ['Average Price', $this->formatCurrency(array_sum($prices) / count($prices))]);
        }
    }

    private function addProductTypesSummary($output, array $data): void
    {
        // Overview Section
        fputcsv($output, ['📊 OVERVIEW']);
        fputcsv($output, ['Total Product Types', count($data)]);
        fputcsv($output, []);

        // Seasonal Distribution
        fputcsv($output, ['🌺 SEASONAL DISTRIBUTION']);
        $seasonCounts = [];
        foreach ($data as $type) {
            $season = $type['Season'];
            $seasonCounts[$season] = ($seasonCounts[$season] ?? 0) + 1;
        }

        $totalTypes = count($data);
        foreach ($seasonCounts as $season => $count) {
            $percentage = ($count / $totalTypes) * 100;
            fputcsv($output, [
                $season,
                $count,
                sprintf('%.1f%%', $percentage),
                $this->generateBarChart($percentage)
            ]);
        }
    }

    private function addStocksSummary($output, array $data): void
    {
        // Overview Section
        fputcsv($output, ['📊 STOCK OVERVIEW']);
        
        $totalQuantity = array_reduce($data, function($carry, $item) {
            return $carry + $item['Available Quantity'];
        }, 0);

        $belowMinimum = array_filter($data, function($item) {
            return $item['Available Quantity'] < $item['Minimum Stock'];
        });

        $aboveMaximum = array_filter($data, function($item) {
            return $item['Available Quantity'] > $item['Maximum Stock'];
        });

        $optimal = array_filter($data, function($item) {
            return $item['Available Quantity'] >= $item['Minimum Stock'] 
                && $item['Available Quantity'] <= $item['Maximum Stock'];
        });

        fputcsv($output, ['Total Stock Items', $this->formatNumber(count($data))]);
        fputcsv($output, ['Total Quantity in Stock', $this->formatNumber($totalQuantity)]);
        fputcsv($output, []);

        // Stock Status Distribution
        fputcsv($output, ['📈 STOCK STATUS DISTRIBUTION']);
        $totalItems = count($data);
        
        $this->addStockStatusRow($output, 'Below Minimum', count($belowMinimum), $totalItems, '⚠️');
        $this->addStockStatusRow($output, 'Optimal Level', count($optimal), $totalItems, '✅');
        $this->addStockStatusRow($output, 'Above Maximum', count($aboveMaximum), $totalItems, '⚠️');
        fputcsv($output, []);

        // Alert Section
        if (count($belowMinimum) > 0) {
            fputcsv($output, ['🚨 STOCK ALERTS - Items Below Minimum']);
            fputcsv($output, ['Product', 'Current', 'Minimum', 'Status']);
            foreach ($belowMinimum as $item) {
                $deficit = $item['Minimum Stock'] - $item['Available Quantity'];
                fputcsv($output, [
                    $item['Product'],
                    $item['Available Quantity'],
                    $item['Minimum Stock'],
                    sprintf('Deficit: %d units', $deficit)
                ]);
            }
        }
    }

    private function formatNumber($number): string
    {
        return number_format($number, 0, '.', ',');
    }

    private function formatCurrency($amount): string
    {
        return '€' . number_format($amount, 2, '.', ',');
    }

    private function generateBarChart(float $percentage): string
    {
        $barLength = round($percentage / 5); // Each 5% is one character
        return str_repeat('█', $barLength) . str_repeat('░', 20 - $barLength);
    }

    private function calculateSeasonalDistribution(array $data): array
    {
        $seasonCounts = [];
        foreach ($data as $product) {
            $season = $product['Season'];
            $seasonCounts[$season] = ($seasonCounts[$season] ?? 0) + 1;
        }
        return $seasonCounts;
    }

    private function addStockStatusRow($output, string $status, int $count, int $total, string $icon): void
    {
        $percentage = ($count / $total) * 100;
        fputcsv($output, [
            $icon . ' ' . $status,
            $count,
            sprintf('%.1f%%', $percentage),
            $this->generateBarChart($percentage)
        ]);
    }

    private function addMainDataSection($output, array $data): void
    {
        fputcsv($output, self::DOUBLE_LINE);
        fputcsv($output, ['DETAILED DATA SECTION']);
        fputcsv($output, self::SECTION_BORDER_TOP);
        fputcsv($output, self::SECTION_BORDER_BOTTOM);
        
        if (!empty($data)) {
            // Add headers with formatting
            $headers = array_keys($data[0]);
            fputcsv($output, array_map(function($header) {
                return strtoupper($header);
            }, $headers));
            
            // Add data rows with alternating formatting
            foreach ($data as $index => $row) {
                $values = array_values($row);
                if ($index % 2 === 0) {
                    fputcsv($output, $values);
                } else {
                    fputcsv($output, array_map(function($value) {
                        return "• $value";
                    }, $values));
                }
            }
        }
        
        fputcsv($output, self::SECTION_BORDER_TOP);
        fputcsv($output, self::SECTION_BORDER_BOTTOM);
    }
} 