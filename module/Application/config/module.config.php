<?php
/**
 * ZF3 book Simple Shop Training Application
 *
 * @package    Application
 * @author     Ralf Eggert <ralf@travello.de>
 * @link       https://github.com/zf3buch/simple-shop
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */
return [
    'router' => [
        'routes' => [
            'home' => [
                'type'    => 'Literal',
                'options' => [
                    'route'    => '/',
                    'defaults' => [
                        '__NAMESPACE__' => 'Application',
                        'controller'    => 'index',
                        'action'        => 'index',
                    ],
                ],
            ],
        ],
    ],

    'controllers' => [
        'invokables' => [
            'Application\\Index' =>
                'Application\Controller\IndexController',
        ],
    ],

    'service_manager' => [
        'factories' => [
            'Session\Config' =>
                'Zend\Session\Service\SessionConfigFactory',
            'navigation'     =>
                'Zend\Navigation\Service\DefaultNavigationFactory',
        ],
        'aliases'   => [
            'translator' => 'MvcTranslator',
        ],
    ],

    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map'             => include APPLICATION_MODULE_ROOT
            . '/template_map.php',
        'template_path_stack'      => [
            APPLICATION_MODULE_ROOT . '/view',
        ],
    ],

    'translator' => [
        'locale'                    => 'de_DE',
        'translation_file_patterns' => [
            [
                'type'     => 'phpArray',
                'base_dir' => APPLICATION_MODULE_ROOT . '/language',
                'pattern'  => '%s.php',
            ],
        ],
    ],

    'session_config' => [
        'save_path' => APPLICATION_ROOT . '/data/session',
        'name'      => 'ZF3_BOOK_SESSION',
    ],

    'navigation' => [
        'default' => [
            'application' => [
                'type'       => 'mvc',
                'order'      => '100',
                'label'      => 'application_navigation_home',
                'route'      => 'home',
                'controller' => 'index',
                'action'     => 'index',
            ],
        ],
    ],
];
