<?php
namespace ZFTalk\Form;

use Zend\Form\Form;

class FooForm extends Form
{
    public function init()
    {
        $this->add([
            'name' => 'bar',
            'type' => 'ZFTalk\Form\Fieldset\BarFieldset',
            'options' => [
                'use_as_base_fieldset' => true,
            ]
        ]);

        $this->add([
            'name' => 'submit',
            'type' => 'Button',
            'attributes' => [
                'type' => 'submit',
            ],
            'options' => [
                'label' => 'Submit',
            ],
        ]);
    }
}
