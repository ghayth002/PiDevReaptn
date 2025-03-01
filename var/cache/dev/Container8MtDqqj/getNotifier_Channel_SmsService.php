<?php

namespace Container8MtDqqj;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotifier_Channel_SmsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'notifier.channel.sms' shared service.
     *
     * @return \Symfony\Component\Notifier\Channel\SmsChannel
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'notifier'.\DIRECTORY_SEPARATOR.'Channel'.\DIRECTORY_SEPARATOR.'ChannelInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'notifier'.\DIRECTORY_SEPARATOR.'Channel'.\DIRECTORY_SEPARATOR.'AbstractChannel.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'notifier'.\DIRECTORY_SEPARATOR.'Channel'.\DIRECTORY_SEPARATOR.'SmsChannel.php';

        return $container->privates['notifier.channel.sms'] = new \Symfony\Component\Notifier\Channel\SmsChannel(NULL, ($container->services['messenger.default_bus'] ?? self::getMessenger_DefaultBusService($container)));
    }
}
