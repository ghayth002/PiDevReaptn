<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\ProductType;
use App\Entity\Stock;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\QRCodeService;

class PageController extends AbstractController
{
    #[Route('/', name: 'app_temp_index')]
    public function index(): Response
    {
        return $this->render('temp/index.html.twig');
    }

    #[Route('/temp/shop', name: 'app_temp_shop')]
    public function shop(Request $request, EntityManagerInterface $entityManager, QRCodeService $qrCodeService): Response
    {
        $selectedType = $request->query->get('type');
        $productTypes = $entityManager->getRepository(ProductType::class)->findAll();
        
        // Get products based on selected type
        if ($selectedType) {
            $products = $entityManager->getRepository(Product::class)
                ->createQueryBuilder('p')
                ->where('p.type = :type')
                ->setParameter('type', $selectedType)
                ->getQuery()
                ->getResult();
        } else {
            $products = $entityManager->getRepository(Product::class)->findAll();
        }

        // Group categories by season
        $seasonGroups = [];
        foreach ($productTypes as $type) {
            $season = $type->getSeason();
            if (!isset($seasonGroups[$season])) {
                $seasonGroups[$season] = [
                    'id' => $type->getId(),
                    'name' => $season,
                    'icon' => $this->getCategoryIcon($season),
                    'count' => 0,
                    'types' => []
                ];
            }
            $seasonGroups[$season]['types'][] = $type;
        }

        // Format products with QR codes
        $formattedProducts = [];
        foreach ($products as $product) {
            $season = $product->getType()->getSeason();
            if (isset($seasonGroups[$season])) {
                $seasonGroups[$season]['count']++;
            }

            // Format product data
            $productData = [
                'id' => $product->getId(),
                'category' => $product->getCategory(),
                'price' => $product->getPrice(),
                'image' => $product->getImage(),
                'type' => [
                    'season' => $product->getType()->getSeason(),
                    'productionMethod' => $product->getType()->getProductionMethod()
                ]
            ];
            
            // Generate QR code URL directly
            $qrData = $qrCodeService->generateProductQRData($productData);
            $productData['qr_code_url'] = $qrCodeService->generateQRCode($qrData);
            
            $formattedProducts[] = $productData;
        }

        // Convert season groups to array
        $formattedCategories = array_values($seasonGroups);

        return $this->render('temp/shop.html.twig', [
            'categories' => $formattedCategories,
            'products' => $formattedProducts,
            'productTypes' => $productTypes,
            'selectedType' => $selectedType
        ]);
    }

    #[Route('/shop/{id}', name: 'app_temp_shop_detail')]
    public function shopDetail(int $id, EntityManagerInterface $entityManager): Response
    {
        $product = $entityManager->getRepository(Product::class)->find($id);
        
        if (!$product) {
            throw $this->createNotFoundException('Product not found');
        }

        // Get related products from the same category
        $relatedProducts = $entityManager->getRepository(Product::class)
            ->createQueryBuilder('p')
            ->where('p.type = :type')
            ->andWhere('p.id != :id')
            ->setParameter('type', $product->getType())
            ->setParameter('id', $product->getId())
            ->setMaxResults(4)
            ->getQuery()
            ->getResult();

        // Format product data
        $productData = [
            'id' => $product->getId(),
            'category' => $product->getCategory(),
            'price' => $product->getPrice(),
            'image' => $product->getImage(),
            'description' => sprintf(
                'Fresh %s from our trusted suppliers. Harvested in %s season using %s method.',
                $product->getCategory(),
                $product->getType()->getSeason(),
                $product->getType()->getProductionMethod()
            ),
            'type' => [
                'season' => $product->getType()->getSeason(),
                'productionMethod' => $product->getType()->getProductionMethod()
            ]
        ];

        // Sample reviews
        $reviews = [
            [
                'author' => 'John Smith',
                'rating' => 5,
                'date' => '01 Jan 2024',
                'comment' => 'Excellent quality products, very fresh!'
            ],
            [
                'author' => 'Sarah Johnson',
                'rating' => 4,
                'date' => '15 Jan 2024',
                'comment' => 'Good product, fast delivery.'
            ]
        ];

        return $this->render('temp/shop-detail.html.twig', [
            'product' => $productData,
            'relatedProducts' => array_map(function($prod) {
                return [
                    'id' => $prod->getId(),
                    'category' => $prod->getCategory(),
                    'price' => $prod->getPrice(),
                    'image' => $prod->getImage()
                ];
            }, $relatedProducts),
            'reviews' => $reviews
        ]);
    }

    #[Route('/testimonial', name: 'app_testimonial')]
    public function testimonial(): Response
    {
        return $this->render('page/testimonial.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/404', name: 'app_404')]
    public function error(): Response
    {
        return $this->render('page/404.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('page/contact.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/product/qr/{id}', name: 'app_product_qr')]
    public function productQR(int $id, EntityManagerInterface $entityManager): Response
    {
        $product = $entityManager->getRepository(Product::class)->find($id);
        
        if (!$product) {
            throw $this->createNotFoundException('Product not found');
        }

        return $this->render('temp/product-qr.html.twig', [
            'product' => [
                'name' => $product->getCategory(),
                'id' => $product->getId(),
                'price' => [
                    'value' => $product->getPrice(),
                    'currency' => '€',
                    'unit' => 'per kg'
                ],
                'production' => [
                    'method' => $product->getType()->getProductionMethod(),
                    'season' => $product->getType()->getSeason()
                ],
                'scan_date' => date('Y-m-d H:i:s')
            ]
        ]);
    }

    private function getCategoryIcon(string $season): string
    {
        return match ($season) {
            'Spring' => 'fa-seedling',
            'Summer' => 'fa-sun',
            'Fall' => 'fa-leaf',
            'Winter' => 'fa-snowflake',
            default => 'fa-seedling'
        };
    }
}
