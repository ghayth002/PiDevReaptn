<?php

namespace App\Controller;

use App\Entity\Order;
use App\Entity\OrderItem;
use App\Entity\Product;
use App\Entity\ProductType;
use App\Entity\Stock;
use App\Form\OrderType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;

class PageController extends AbstractController
{
    #[Route('/', name: 'app_temp_index')]
    public function index(): Response
    {
        return $this->render('temp/index.html.twig');
    }

    #[Route('/temp/shop', name: 'app_temp_shop')]
    public function shop(Request $request, EntityManagerInterface $entityManager): Response
    {
        return $this->render('temp/shop.html.twig', [
            'categories' => $formattedCategories,
            'products' => $formattedProducts,
            'productTypes' => $categories // Add this for the filter dropdown
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

        return $this->render('temp/shop-detail.html.twig', [
            'product' => $product,
            'relatedProducts' => $relatedProducts
        ]);
    }

    #[Route('/cart', name: 'app_temp_cart')]
    public function cart(SessionInterface $session, EntityManagerInterface $entityManager): Response
    {
        $cart = $session->get('cart', []);
        $cartItems = [];
        $total = 0;

        foreach ($cart as $id => $quantity) {
            $product = $entityManager->getRepository(Product::class)->find($id);
            if ($product) {
                $cartItems[] = [
                    'product' => $product,
                    'quantity' => $quantity
                ];
                $total += $product->getPrice() * $quantity;
            }
        }

        return $this->render('temp/cart.html.twig', [
            'items' => $cartItems,
            'total' => $total
        ]);
    }

    #[Route('/cart/add/{id}', name: 'app_cart_add')]
    public function addToCart(int $id, Request $request, SessionInterface $session, EntityManagerInterface $entityManager): Response
    {
        $cart = $session->get('cart', []);
        $quantity = $request->query->get('quantity', 1);

        // Check if product exists
        $product = $entityManager->getRepository(Product::class)->find($id);
        if (!$product) {
            $this->addFlash('error', 'Product not found');
            return $this->redirectToRoute('app_temp_cart');
        }

        // Add or update quantity
        if (isset($cart[$id])) {
            $cart[$id] += $quantity;
        } else {
            $cart[$id] = $quantity;
        }

        $session->set('cart', $cart);
        $this->addFlash('success', 'Product added to cart');

        return $this->redirectToRoute('app_temp_cart');
    }

    #[Route('/cart/remove/{id}', name: 'app_cart_remove')]
    public function removeFromCart(int $id, SessionInterface $session): Response
    {
        $cart = $session->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            $session->set('cart', $cart);
        }

        return $this->redirectToRoute('app_temp_cart');
    }

    #[Route('/cart/update/{id}', name: 'app_cart_update', methods: ['POST'])]
    public function updateCart(int $id, Request $request, SessionInterface $session, EntityManagerInterface $entityManager): JsonResponse
    {
        $cart = $session->get('cart', []);
        $quantity = (int) $request->query->get('quantity', 1);

        if ($quantity < 1) {
            $quantity = 1;
        }

        // Check if product exists
        $product = $entityManager->getRepository(Product::class)->find($id);
        if (!$product) {
            return new JsonResponse(['success' => false, 'message' => 'Product not found'], 404);
        }

        $cart[$id] = $quantity;
        $session->set('cart', $cart);

        return new JsonResponse(['success' => true]);
    }

    #[Route('/checkout', name: 'app_temp_checkout')]
    public function checkout(Request $request, SessionInterface $session, EntityManagerInterface $entityManager): Response
    {
        $cart = $session->get('cart', []);
        if (empty($cart)) {
            $this->addFlash('error', 'Your cart is empty');
            return $this->redirectToRoute('app_temp_cart');
        }

        // Calculate cart totals
        $cartItems = [];
        $total = 0;
        foreach ($cart as $id => $quantity) {
            $product = $entityManager->getRepository(Product::class)->find($id);
            if ($product) {
                $cartItems[] = [
                    'product' => $product,
                    'quantity' => $quantity
                ];
                $total += $product->getPrice() * $quantity;
            }
        }

        $order = new Order();
        $form = $this->createForm(OrderType::class, $order);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Set the order total
            $order->setTotal($total);
            
            // Add order items
            foreach ($cartItems as $item) {
                $orderItem = new OrderItem();
                $orderItem->setProduct($item['product']);
                $orderItem->setQuantity($item['quantity']);
                $orderItem->setPrice($item['product']->getPrice());
                $order->addItem($orderItem);
            }

            // Persist the order
            $entityManager->persist($order);
            $entityManager->flush();

            // Clear the cart
            $session->remove('cart');
            
            $this->addFlash('success', 'Order placed successfully! Thank you for your purchase.');
            return $this->redirectToRoute('app_temp_shop');
        }

        return $this->render('temp/checkout.html.twig', [
            'cartItems' => $cartItems,
            'total' => $total,
            'form' => $form->createView()
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

    #[Route('/temp', name: 'app_temp_index')]
    public function tempIndex(): Response
    {
        return $this->render('temp/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/temp/shop', name: 'app_temp_shop')]
    public function tempShop(Request $request, EntityManagerInterface $entityManager): Response
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
            $season = strtolower($type->getSeason());
            if (!isset($seasonGroups[$season])) {
                $seasonGroups[$season] = [
                    'id' => $type->getId(), // Use the first type ID for this season
                    'name' => $type->getSeason(),
                    'icon' => $this->getCategoryIcon($season),
                    'count' => 0,
                    'types' => []
                ];
            }
            $seasonGroups[$season]['types'][] = $type;
        }

        // Count products for each season
        foreach ($products as $product) {
            $season = strtolower($product->getType()->getSeason());
            if (isset($seasonGroups[$season])) {
                $seasonGroups[$season]['count']++;
            }
        }

        // Convert season groups to array
        $formattedCategories = array_values($seasonGroups);

        return $this->render('temp/shop.html.twig', [
            'categories' => $formattedCategories,
            'products' => $products,
            'productTypes' => $productTypes
        ]);
    }

    #[Route('/temp/shop-detail/{id}', name: 'app_temp_shop_detail')]
    public function tempShopDetail(int $id, EntityManagerInterface $entityManager): Response
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
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();

        // Format the main product
        $formattedProduct = [
            'id' => $product->getId(),
            'name' => $product->getCategory(),
            'description' => sprintf(
                'Fresh product from our trusted suppliers. Harvested in %s season using %s method. Best preserved for %s.',
                $product->getType()->getSeason(),
                $product->getType()->getProductionMethod(),
                $product->getType()->getPreservationDuration()
            ),
            'price' => $product->getPrice(),
            'image' => $product->getImage() ?? 'fruite-item-1.jpg',
            'type' => [
                'id' => $product->getType()->getId(),
                'name' => $product->getType()->getSeason(),
                'productionMethod' => $product->getType()->getProductionMethod()
            ],
            'rating' => 4.5,
            'reviews_count' => mt_rand(5, 20)
        ];

        // Format related products
        $formattedFeaturedProducts = array_map(function($relProduct) {
            return [
                'id' => $relProduct->getId(),
                'name' => $relProduct->getCategory(),
                'price' => $relProduct->getPrice(),
                'image' => $relProduct->getImage() ?? 'fruite-item-1.jpg',
                'type' => [
                    'id' => $relProduct->getType()->getId(),
                    'name' => $relProduct->getType()->getSeason(),
                    'productionMethod' => $relProduct->getType()->getProductionMethod()
                ]
            ];
        }, $relatedProducts);

        return $this->render('temp/shop-detail.html.twig', [
            'product' => $formattedProduct,
            'featured_products' => $formattedFeaturedProducts,
            'reviews' => [
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
                    'comment' => 'Good product, fast delivery. Will buy again.'
                ]
            ]
        ]);
    }

    #[Route('/admin/orders', name: 'app_admin_orders')]
    public function adminOrders(EntityManagerInterface $entityManager): Response
    {
        $orders = $entityManager->getRepository(Order::class)->findBy([], ['createdAt' => 'DESC']);
        
        return $this->render('temp/admin/order.html.twig', [
            'orders' => $orders
        ]);
    }

    #[Route('/admin/orders/{id}', name: 'app_admin_order_detail')]
    public function adminOrderDetail(Order $order): Response
    {
        return $this->render('temp/admin/order_detail.html.twig', [
            'order' => $order
        ]);
    }

    #[Route('/admin/orders/{id}/status', name: 'app_admin_order_status', methods: ['POST'])]
    public function adminOrderStatus(Order $order, Request $request, EntityManagerInterface $entityManager): Response
    {
        $status = $request->request->get('status');
        if ($status) {
            $order->setStatus($status);
            $entityManager->flush();
            $this->addFlash('success', 'Order status updated successfully.');
        }
        
        return $this->redirectToRoute('app_admin_order_detail', ['id' => $order->id]);
    }

    #[Route('/admin/product/delete/{id}', name: 'admin_product_delete')]
    public function deleteProduct(int $id, EntityManagerInterface $entityManager): Response
    {
        try {
            $product = $entityManager->getRepository(Product::class)->find($id);
            if (!$product) {
                $this->addFlash('error', 'Product not found.');
                return $this->redirectToRoute('admin_products');
            }

            // Check if product has related stock entries
            $stockEntries = $entityManager->getRepository(Stock::class)->findBy(['product' => $product]);
            
            // Check if product is in any orders
            $orderItems = $entityManager->getRepository(OrderItem::class)->findBy(['product' => $product]);

            if (count($stockEntries) > 0) {
                $this->addFlash('error', 'Cannot delete this product because it has stock entries. Please remove the stock entries first.');
                return $this->redirectToRoute('admin_products');
            }

            if (count($orderItems) > 0) {
                $this->addFlash('error', 'Cannot delete this product because it is associated with orders.');
                return $this->redirectToRoute('admin_products');
            }

            // If no related entries exist, proceed with deletion
            $entityManager->remove($product);
            $entityManager->flush();
            
            $this->addFlash('success', 'Product deleted successfully!');

        } catch (\Exception $e) {
            $this->addFlash('error', 'An error occurred while trying to delete the product: ' . $e->getMessage());
        }

        return $this->redirectToRoute('admin_products');
    }

    private function getCategoryIcon(string $season): string
    {
        return match (strtolower($season)) {
            'spring' => 'fa-leaf',
            'summer' => 'fa-sun',
            'autumn', 'fall' => 'fa-tree',
            'winter' => 'fa-snowflake',
            default => 'fa-seedling'
        };
    }
}
