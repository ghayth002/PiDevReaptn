<?php

namespace App\Controller;

use App\Entity\Order;
use App\Entity\OrderItem;
use App\Entity\Product;
use App\Entity\ProductType;
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
    public function tempShop(Request $request,EntityManagerInterface $entityManager): Response
    {
        $categories = $entityManager->getRepository(ProductType::class)->findAll();
        $products = $entityManager->getRepository(Product::class)->findAll();

        // Transform categories to match template expectations
        $formattedCategories = array_map(function($category) use ($products) {
            $count = 0;
            foreach ($products as $product) {
                if ($product->getType() === $category) {
                    $count++;
                }
            }
            
            return [
                'id' => $category->getId(),
                'name' => $category->getSeason(),
                'count' => $count,
                'icon' => $this->getCategoryIcon($category->getSeason())
            ];
        }, $categories);

        // Transform products to match template expectations
        $typeId = $request->query->get('type');
        
        // Get categories (product types)
        $categories = $entityManager->getRepository(ProductType::class)->findAll();
        
        // Build products query with optional type filter
        $productsQuery = $entityManager->getRepository(Product::class)
            ->createQueryBuilder('p');
            
        if ($typeId) {
            $productsQuery->where('p.type = :typeId')
                         ->setParameter('typeId', $typeId);
        }
        
        $formattedProducts = $productsQuery->getQuery()->getResult();
        $formattedProducts = array_map(function($product) {
            return [
                'id' => $product->getId(),
                'name' => $product->getCategory(),
                'description' => 'Fresh product from our suppliers',
                'price' => $product->getPrice(),
                'image' => $product->getImage() ?? 'fruite-item-1.jpg',
                'category' => $product->getType()->getSeason(),
                'type' => [
                    'id' => $product->getType()->getId(),
                    'name' => $product->getType()->getSeason(),
                    'productionMethod' => $product->getType()->getProductionMethod()
                ]
            ];
        }, $products);
        return $this->render('temp/shop.html.twig', [
            'categories' => $formattedCategories,
            'products' => $formattedProducts,
            'productTypes' => $categories // Add this for the filter dropdown
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

    private function getCategoryIcon(string $categoryName): string
    {
        $icons = [
            'Spring' => 'fa-seedling',
            'Summer' => 'fa-sun',
            'Fall' => 'fa-leaf',
            'Winter' => 'fa-snowflake',
            'All Season' => 'fa-calendar'
        ];

        foreach ($icons as $key => $icon) {
            if (str_contains(strtolower($categoryName), strtolower($key))) {
                return $icon;
            }
        }

        return 'fa-leaf'; // Default icon
    }
}
