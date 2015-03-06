<?php
namespace Cliente;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Cliente\Service\ClienteService as ClienteService;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
    public function getServiceConfig() {
        return array(
            'factories' => array(
                'Cliente\Service\ClienteService' => function($service) {
                    return new ClienteService($service->get('Doctrine\ORM\EntityManager'));
                }
            )
        );
    }
}
