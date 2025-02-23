<?php

namespace ContainerJYwqNPP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_844qzXlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.844qzXl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.844qzXl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'productRepository' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', true],
            'reportService' => ['privates', 'App\\Service\\ReportService', 'getReportServiceService', true],
            'stockRepository' => ['privates', 'App\\Repository\\StockRepository', 'getStockRepositoryService', true],
        ], [
            'productRepository' => 'App\\Repository\\ProductRepository',
            'reportService' => 'App\\Service\\ReportService',
            'stockRepository' => 'App\\Repository\\StockRepository',
        ]);
    }
}
