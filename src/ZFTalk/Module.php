<?php
namespace ZFTalk;

use Zend\Mvc\MvcEvent;

class Module
{
    public function onBootstrap(MvcEvent $mvcEvent)
    {
        $serviceManager = $mvcEvent->getApplication()->getServiceManager();
        $sessionManager = $serviceManager->get('Zend\Session\SessionManager');
        $sessionManager->start();
    }

    public function getConfig()
    {
        return include __DIR__ . '/../../config/module.config.php';
    }
}
