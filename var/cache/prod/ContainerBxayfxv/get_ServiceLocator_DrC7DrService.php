<?php

namespace ContainerBxayfxv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DrC7DrService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.drC7Dr_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.drC7Dr_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'cartRepository' => ['privates', 'App\\Repository\\CartRepository', 'getCartRepositoryService', true],
        ], [
            'cartRepository' => 'App\\Repository\\CartRepository',
        ]);
    }
}
