<?php

namespace Container2gxIJQM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CYiO8YgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CYiO8Yg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CYiO8Yg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'voyage' => ['privates', '.errored..service_locator.CYiO8Yg.App\\Entity\\Voyage', NULL, 'Cannot autowire service ".service_locator.CYiO8Yg": it references class "App\\Entity\\Voyage" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'voyage' => 'App\\Entity\\Voyage',
        ]);
    }
}