<?php
return [
    'controllers' => [
        'invokables' => [
            'ZFTalk\Controller\FormController' => 'ZFTalk\Controller\FormController'
        ],
    ],

    'doctrine' => [
        'driver' => [
            'ZFTalk\Entity' => [
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'paths' => __DIR__ . '/../src/ZFTalk/Entity',
            ],

            'orm_default' => [
                'drivers' => [
                    'ZFTalk\Entity'  => 'ZFTalk\Entity',
                ],
            ],
        ],
    ],

    'form_elements' => [
        'factories' => [
            'ZFTalk\Form\Fieldset\BarFieldset'  => 'ZFTalk\Factory\Form\Fieldset\BarFieldsetFactory',
        ],
        'invokables' => [
            'ZFTalk\Form\FooForm'               => 'ZFTalk\Form\FooForm',
        ],
    ],

    'router' => [
        'routes' => [
            'zftalk' => [
                'type' => 'Literal',
                'options' => [
                    'route'    => '/zftalk',
                    'defaults' => [
                        'controller' => 'ZFTalk\Controller\FormController',
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],

    'service_manager' => [
        /*'abstract_factories' => [
            'Zend\Session\Service\ContainerAbstractServiceFactory',
        ],*/
        'factories' => [
            'Zend\Session\Config\ConfigInterface'           => 'Zend\Session\Service\SessionConfigFactory',
            'Zend\Session\ManagerInterface'                 => 'Zend\Session\Service\SessionManagerFactory',
            'Zend\Session\SaveHandler\SaveHandlerInterface' => 'ZFTalk\Factory\Session\SaveHandler\DbTableGatewayFactory',
        ],
    ],

    'session_config' => [
        'name' => 'SESSIONID',
    ],

    'session_manager' => [
        'enable_default_container_manager' => true,
    ],

    'view_manager' => [
        'template_map' => [
            'zf-talk/form/index' => __DIR__ .'/../view/zf-talk/form/index.phtml',
        ]
    ]
];
