<?php

namespace ContainerN45mwIN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReportServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\ReportService' shared autowired service.
     *
     * @return \App\Service\ReportService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'ReportService.php';

        return $container->privates['App\\Service\\ReportService'] = new \App\Service\ReportService();
    }
}
