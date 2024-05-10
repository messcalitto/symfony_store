<?php

namespace ContainerBxayfxv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCollectionConfiguratorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CollectionConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CollectionConfigurator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory'] ?? self::getEntityFactoryService($container));

        if (isset($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CollectionConfigurator'])) {
            return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CollectionConfigurator'];
        }

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CollectionConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CollectionConfigurator(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), $a, ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ControllerFactory'] ?? self::getControllerFactoryService($container)));
    }
}
