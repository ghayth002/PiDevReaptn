<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Response;

class ChartPDFService
{
    private const PAGE_WIDTH = 210;  // A4 width in mm
    private const PAGE_HEIGHT = 297; // A4 height in mm
    private const MARGIN = 10;       // Margin in mm

    public function generateChartPDF(string $imageData, string $title): Response
    {
        // Create PDF content
        $content = $this->generatePDFContent($imageData, $title);
        
        // Create response
        $response = new Response($content);
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'attachment; filename="chart.pdf"');
        
        return $response;
    }

    private function generatePDFContent(string $imageData, string $title): string
    {
        // Basic PDF structure
        $content = "%PDF-1.4\n";
        
        // Add objects
        $content .= $this->createCatalog();
        $content .= $this->createPages();
        $content .= $this->createPage();
        $content .= $this->createFont();
        $content .= $this->createContent($title);
        $content .= $this->createImage($imageData);
        
        // Add cross-reference table
        $content .= $this->createXref();
        
        // Add trailer
        $content .= "trailer\n<< /Size 7 /Root 1 0 R >>\nstartxref\n0\n%%EOF\n";
        
        return $content;
    }

    private function createCatalog(): string
    {
        return "1 0 obj\n<< /Type /Catalog /Pages 2 0 R >>\nendobj\n";
    }

    private function createPages(): string
    {
        return "2 0 obj\n<< /Type /Pages /Kids [3 0 R] /Count 1 >>\nendobj\n";
    }

    private function createPage(): string
    {
        return "3 0 obj\n<< /Type /Page /Parent 2 0 R /Resources << /Font << /F1 4 0 R >> /XObject << /Im1 6 0 R >> >> /MediaBox [0 0 595 842] /Contents 5 0 R >>\nendobj\n";
    }

    private function createFont(): string
    {
        return "4 0 obj\n<< /Type /Font /Subtype /Type1 /BaseFont /Helvetica >>\nendobj\n";
    }

    private function createContent(string $title): string
    {
        $stream = "BT\n";
        $stream .= "/F1 16 Tf\n";
        $stream .= "50 800 Td\n";
        $stream .= "($title) Tj\n";
        $stream .= "ET\n";
        $stream .= "q 500 0 0 400 50 350 cm\n";
        $stream .= "/Im1 Do\n";
        $stream .= "Q\n";
        
        return "5 0 obj\n<< /Length " . strlen($stream) . " >>\nstream\n" . $stream . "\nendstream\nendobj\n";
    }

    private function createImage(string $imageData): string
    {
        return "6 0 obj\n<< /Type /XObject /Subtype /Image /Width 500 /Height 400 /ColorSpace /DeviceRGB /BitsPerComponent 8 /Filter /DCTDecode /Length " . strlen($imageData) . " >>\nstream\n" . $imageData . "\nendstream\nendobj\n";
    }

    private function createXref(): string
    {
        return "xref\n0 7\n0000000000 65535 f\n0000000010 00000 n\n0000000056 00000 n\n0000000111 00000 n\n0000000229 00000 n\n0000000296 00000 n\n0000000392 00000 n\n";
    }
} 