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
    'service_manager' => [
        'factories' => [
            'Zend\Db\Adapter\Adapter' =>
                'Zend\Db\Adapter\AdapterServiceFactory',
        ],
    ],
];
