<?php
namespace ZFTalk\Factory\Session\SaveHandler;

use Zend\Db\TableGateway\TableGateway;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Session\SaveHandler\DbTableGateway;
use Zend\Session\SaveHandler\DbTableGatewayOptions;

class DbTableGatewayFactory implements FactoryInterface
{
    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return DbTableGateway
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /**
         * @var \Zend\ServiceManager\ServiceManager $serviceLocator
         * @var \Zend\Db\Adapter\Adapter            $adapter
         */
        $adapter = $serviceLocator->get('Zend\Db\Adapter\Adapter');
        $tableGateway = new TableGateway('session', $adapter);
        return new DbTableGateway($tableGateway, new DbTableGatewayOptions());
    }
}
