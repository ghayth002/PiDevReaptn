<?php

namespace App\Controller;

use App\Entity\Order;  // Add this import
use App\Entity\Product;
use App\Entity\ProductType as ProductTypeEntity;
use App\Entity\Stock;
use App\Form\ProductType;
use App\Form\ProductTypeType;
use App\Form\StockType;
use App\Repository\OrderRepository;  // Add this import
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'admin_dashboard')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $products = $entityManager->getRepository(Product::class)->findAll();
        $productTypes = $entityManager->getRepository(ProductTypeEntity::class)->findAll();
        $stocks = $entityManager->getRepository(Stock::class)->findAll();
        $orders = $entityManager->getRepository(Order::class)->findAll();  // Updated to use Order::class

        return $this->render('temp/admin/dashboard.html.twig', [
            'products' => $products,
            'productTypes' => $productTypes,
            'stocks' => $stocks,
            'orders' => $orders,
        ]);
    }

    #[Route('/products', name: 'admin_products')]
    public function products(EntityManagerInterface $entityManager): Response
    {
        $products = $entityManager->getRepository(Product::class)->findAll();
        return $this->render('temp/admin/products.html.twig', [
            'products' => $products,
        ]);
    }

    #[Route('/product/new', name: 'admin_product_new')]
    public function newProduct(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('imageFile')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('product_images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash('error', 'Error uploading image');
                    return $this->redirectToRoute('admin_products');
                }

                $product->setImage('uploads/products/'.$newFilename);
            }

            $entityManager->persist($product);
            $entityManager->flush();

            $this->addFlash('success', 'Product created successfully!');
            return $this->redirectToRoute('admin_products');
        }

        return $this->render('temp/admin/product_form.html.twig', [
            'form' => $form->createView(),
            'product' => null,
        ]);
    }

    #[Route('/product/edit/{id}', name: 'admin_product_edit')]
    public function editProduct(int $id, Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $product = $entityManager->getRepository(Product::class)->find($id);
        if (!$product) {
            throw $this->createNotFoundException('Product not found');
        }

        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('imageFile')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    // Delete old image if exists
                    $oldImage = $product->getImage();
                    if ($oldImage) {
                        $oldImagePath = $this->getParameter('kernel.project_dir').'/public/'.$oldImage;
                        if (file_exists($oldImagePath)) {
                            unlink($oldImagePath);
                        }
                    }

                    $imageFile->move(
                        $this->getParameter('product_images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash('error', 'Error uploading image');
                    return $this->redirectToRoute('admin_products');
                }

                $product->setImage('uploads/products/'.$newFilename);
            }

            $entityManager->flush();

            $this->addFlash('success', 'Product updated successfully!');
            return $this->redirectToRoute('admin_products');
        }

        return $this->render('temp/admin/product_form.html.twig', [
            'form' => $form->createView(),
            'product' => $product,
        ]);
    }

    #[Route('/product/delete/{id}', name: 'admin_product_delete')]
    public function deleteProduct(int $id, EntityManagerInterface $entityManager): Response
    {
        $product = $entityManager->getRepository(Product::class)->find($id);
        if ($product) {
            $entityManager->remove($product);
            $entityManager->flush();
            $this->addFlash('success', 'Product deleted successfully!');
        }

        return $this->redirectToRoute('admin_products');
    }

    #[Route('/product-types', name: 'admin_product_types')]
    public function productTypes(EntityManagerInterface $entityManager): Response
    {
        $types = $entityManager->getRepository(ProductTypeEntity::class)->findAll();
        return $this->render('temp/admin/product_types.html.twig', [
            'types' => $types,
        ]);
    }

    #[Route('/product-type/new', name: 'admin_product_type_new')]
    public function newProductType(Request $request, EntityManagerInterface $entityManager): Response
    {
        $type = new ProductTypeEntity();
        $form = $this->createForm(ProductTypeType::class, $type);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($type);
            $entityManager->flush();

            $this->addFlash('success', 'Product type created successfully!');
            return $this->redirectToRoute('admin_product_types');
        }

        return $this->render('temp/admin/product_type_form.html.twig', [
            'form' => $form->createView(),
            'type' => null,
        ]);
    }

    #[Route('/product-type/edit/{id}', name: 'admin_product_type_edit')]
    public function editProductType(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $type = $entityManager->getRepository(ProductTypeEntity::class)->find($id);
        if (!$type) {
            throw $this->createNotFoundException('Product type not found');
        }

        $form = $this->createForm(ProductTypeType::class, $type);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Product type updated successfully!');
            return $this->redirectToRoute('admin_product_types');
        }

        return $this->render('temp/admin/product_type_form.html.twig', [
            'form' => $form->createView(),
            'type' => $type,
        ]);
    }

    #[Route('/product-type/delete/{id}', name: 'admin_product_type_delete')]
    public function deleteProductType(int $id, EntityManagerInterface $entityManager): Response
    {
        $type = $entityManager->getRepository(ProductTypeEntity::class)->find($id);
        if ($type) {
            $entityManager->remove($type);
            $entityManager->flush();
            $this->addFlash('success', 'Product type deleted successfully!');
        }

        return $this->redirectToRoute('admin_product_types');
    }

    #[Route('/stocks', name: 'admin_stocks')]
    public function stocks(EntityManagerInterface $entityManager): Response
    {
        $stocks = $entityManager->getRepository(Stock::class)->findAll();
        return $this->render('temp/admin/stocks.html.twig', [
            'stocks' => $stocks,
        ]);
    }

    #[Route('/stock/new', name: 'admin_stock_new')]
    public function newStock(Request $request, EntityManagerInterface $entityManager): Response
    {
        $stock = new Stock();
        $form = $this->createForm(StockType::class, $stock);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($stock);
            $entityManager->flush();

            $this->addFlash('success', 'Stock entry created successfully!');
            return $this->redirectToRoute('admin_stocks');
        }

        return $this->render('temp/admin/stock_form.html.twig', [
            'form' => $form->createView(),
            'stock' => null,
        ]);
    }

    #[Route('/stock/edit/{id}', name: 'admin_stock_edit')]
    public function editStock(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $stock = $entityManager->getRepository(Stock::class)->find($id);
        if (!$stock) {
            throw $this->createNotFoundException('Stock not found');
        }

        $form = $this->createForm(StockType::class, $stock);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Stock entry updated successfully!');
            return $this->redirectToRoute('admin_stocks');
        }

        return $this->render('temp/admin/stock_form.html.twig', [
            'form' => $form->createView(),
            'stock' => $stock,
        ]);
    }

    #[Route('/stock/delete/{id}', name: 'admin_stock_delete')]
    public function deleteStock(int $id, EntityManagerInterface $entityManager): Response
    {
        $stock = $entityManager->getRepository(Stock::class)->find($id);
        if ($stock) {
            $entityManager->remove($stock);
            $entityManager->flush();
            $this->addFlash('success', 'Stock entry deleted successfully!');
        }

        return $this->redirectToRoute('admin_stocks');
    }

    #[Route('/orders', name: 'app_admin_orders')]
    public function orders(OrderRepository $orderRepository): Response
    {
        return $this->render('temp/admin/order.html.twig', [
            'orders' => $orderRepository->findAll(),
        ]);
    }

    #[Route('/order/{id}', name: 'app_admin_order_detail')]
    public function orderDetail(Order $order): Response
    {
        return $this->render('temp/admin/order_detail.html.twig', [
            'order' => $order,
        ]);
    }

    #[Route('/order/{id}/status', name: 'app_admin_order_status', methods: ['POST'])]
    public function updateOrderStatus(Request $request, Order $order, EntityManagerInterface $entityManager): Response
    {
        $status = $request->request->get('status');
        if ($status) {
            $order->setStatus($status);
            $entityManager->flush();
            $this->addFlash('success', 'Order status updated successfully');
        }
        
        return $this->redirectToRoute('app_admin_orders');
    }
}
