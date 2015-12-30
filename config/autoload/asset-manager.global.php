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
    'asset_manager' => [
        'resolver_configs' => [
            'aliases' => [
                'assets/vendor/bootstrap/'   =>
                    APPLICATION_ROOT . '/vendor/twitter/bootstrap/dist',
                'assets/vendor/jquery'       =>
                    APPLICATION_ROOT . '/vendor/frameworks/jquery',
                'assets/vendor/font-awesome' =>
                    APPLICATION_ROOT . '/vendor/fortawesome/font-awesome',
            ],
        ],
        'caching'          => [
            'default' => [
                'cache'   => 'AssetManager\\Cache\\FilePathCache',
                'options' => [
                    'dir' => 'public',
                ],
            ],
        ],
    ],
];
