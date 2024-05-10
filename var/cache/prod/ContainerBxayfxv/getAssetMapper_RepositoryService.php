<?php

namespace ContainerBxayfxv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_RepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'asset_mapper.repository' shared service.
     *
     * @return \Symfony\Component\AssetMapper\AssetMapperRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['asset_mapper.repository'] = new \Symfony\Component\AssetMapper\AssetMapperRepository([(\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-turbo'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'DependencyInjection/../../assets/dist') => '@symfony/ux-turbo', (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'stimulus-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'DependencyInjection/../../assets/dist') => '@symfony/stimulus-bundle', 'assets/' => '', (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/public') => 'bundles/easyadmin'], \dirname(__DIR__, 4), ['#^(?=[^\\.]).*\\.d\\.ts$#', '#^(?=[^\\.]).*.*/(?=[^\\.])controllers\\.json$#'], true, false);
    }
}
