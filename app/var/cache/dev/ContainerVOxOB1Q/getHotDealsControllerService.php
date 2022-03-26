<?php

namespace ContainerVOxOB1Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHotDealsControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\HotDealsController' shared autowired service.
     *
     * @return \App\Controller\HotDealsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/HotDealsController.php';

        $container->services['App\\Controller\\HotDealsController'] = $instance = new \App\Controller\HotDealsController();

        $instance->setContainer(($container->privates['.service_locator.l1ae.Qz'] ?? $container->load('get_ServiceLocator_L1ae_QzService'))->withContext('App\\Controller\\HotDealsController', $container));

        return $instance;
    }
}