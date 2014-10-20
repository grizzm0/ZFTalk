<?php
namespace ZFTalk\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class FormController extends AbstractActionController
{
    public function indexAction()
    {
        /**
         * @var \Zend\Form\Form $form
         * @var \Zend\Http\PhpEnvironment\Request $request
         */
        $form = $this->getServiceLocator()->get('FormElementManager')->get('ZFTalk\Form\FooForm');
        $request = $this->getRequest();

        if (!$request->isPost()) {
            return new ViewModel([
                'form' => $form,
            ]);
        }

        $form->setData($request->getPost());

        if (!$form->isValid()) {
            return new ViewModel([
                'form' => $form,
            ]);
        }

        var_dump($form->getData());

        return new ViewModel([
            'form' => $form,
        ]);
    }
}
