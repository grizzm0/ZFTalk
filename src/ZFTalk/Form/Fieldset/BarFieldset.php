<?php
namespace ZFTalk\Form\Fieldset;

use Zend\Form\Fieldset;
use Zend\InputFilter\InputFilterProviderInterface;

class BarFieldset extends Fieldset implements InputFilterProviderInterface
{
    public function init()
    {
        $this->add([
            'name' => 'name',
            'type' => 'Text',
            'options' => [
                'label' => 'Name',
            ],
        ]);
    }

    public function getInputFilterSpecification()
    {
        return array(
            'name' => array(
                'required' => true,
            )
        );
    }
}
