<?php

namespace ContainerBxayfxv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderProductRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\OrderProductRepository' shared autowired service.
     *
     * @return \App\Repository\OrderProductRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\OrderProductRepository'] = new \App\Repository\OrderProductRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
