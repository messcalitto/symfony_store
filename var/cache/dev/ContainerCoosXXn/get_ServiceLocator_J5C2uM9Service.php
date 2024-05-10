<?php

namespace ContainerCoosXXn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_J5C2uM9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.j5C2uM9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.j5C2uM9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'productRepository' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', true],
        ], [
            'paginator' => '?',
            'productRepository' => 'App\\Repository\\ProductRepository',
        ]);
    }
}
