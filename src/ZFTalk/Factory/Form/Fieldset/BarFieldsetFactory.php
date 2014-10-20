<?php
namespace ZFTalk\Factory\Form\Fieldset;

use DoctrineModule\Stdlib\Hydrator\DoctrineObject;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use ZFTalk\Entity\Bar;
use ZFTalk\Form\Fieldset\BarFieldset;

class BarFieldsetFactory implements FactoryInterface
{
    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return LoginForm
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /**
         * @var \Zend\Form\FormElementManager               $serviceLocator
         * @var \Zend\ServiceManager\ServiceManager         $serviceManager
         * @var \Doctrine\Common\Persistence\ObjectManager  $objectManager
         */
        $serviceManager = $serviceLocator->getServiceLocator();
        $objectManager  = $serviceManager->get('Doctrine\ORM\EntityManager');

        $form = new BarFieldset();
        $form->setHydrator(new DoctrineObject($objectManager));
        $form->setObject(new Bar());

        return $form;
    }
}
