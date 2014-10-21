<?php
namespace ZFTalk;

use Zend\Mvc\MvcEvent;

class Module
{
    public function onBootstrap(MvcEvent $mvcEvent)
    {
        // Init SessionManager
        $mvcEvent->getApplication()->getServiceManager()->get('Zend\Session\ManagerInterface');
    }

    public function getConfig()
    {
        return include __DIR__ . '/../../config/module.config.php';
    }
}
