<?php

namespace ContainerBxayfxv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAccessDeniedControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\AccessDeniedController' shared autowired service.
     *
     * @return \App\Controller\AccessDeniedController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\AccessDeniedController'] = $instance = new \App\Controller\AccessDeniedController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\AccessDeniedController', $container));

        return $instance;
    }
}