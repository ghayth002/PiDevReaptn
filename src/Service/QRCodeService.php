<?php

namespace App\Service;

use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class QRCodeService
{
    private $urlGenerator;

    public function __construct(UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    public function generateQRCode(string $data): string
    {
        // Generate QR code directly with the product data
        return sprintf(
            'https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=%s&ecc=M',
            urlencode($data)
        );
    }
    
    public function generateProductQRData(array $product): string
    {
        // Create a simple text format that's easy to read when scanned
        return sprintf(
            "Product: %s\nPrice: €%.2f per kg\nSeason: %s\nProduction: %s",
            $product['category'],
            $product['price'],
            $product['type']['season'],
            $product['type']['productionMethod']
        );
    }

    private function getSeasonIcon(string $season): string
    {
        return match ($season) {
            'Spring' => 'fa-seedling',
            'Summer' => 'fa-sun',
            'Fall' => 'fa-leaf',
            'Winter' => 'fa-snowflake',
            default => 'fa-calendar'
        };
    }
} 