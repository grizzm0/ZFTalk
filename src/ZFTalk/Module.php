<?php
namespace ZFTalk;

use Zend\Mvc\MvcEvent;

class Module
{
    public function onBootstrap(MvcEvent $mvcEvent)
    {
        /**
         * @var \Zend\ServiceManager\ServiceManager $serviceManager
         * @var \Zend\Session\SessionManager $sessionManager
         */
        $serviceManager = $mvcEvent->getApplication()->getServiceManager();
        $sessionManager = $serviceManager->get('Zend\Session\ManagerInterface');
        $sessionManager->start();
    }

    public function getConfig()
    {
        return include __DIR__ . '/../../config/module.config.php';
    }
}
