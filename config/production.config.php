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
    'modules'                 => [
        'AssetManager',
        'Application',
        'ZF3BuchViewHelper',
    ],
    'module_listener_options' => [
        'config_glob_paths'        => [
            APPLICATION_ROOT
            . '/config/autoload/{,*.}{global,production,local}.php',
        ],
        'module_paths'             => [
            APPLICATION_ROOT . '/module',
            APPLICATION_ROOT . '/vendor',
        ],
        'cache_dir'                => APPLICATION_ROOT . '/data/cache',
        'config_cache_enabled'     => false,
        'config_cache_key'         => 'module_config_cache',
        'module_map_cache_enabled' => false,
        'module_map_cache_key'     => 'module_map_cache',
    ],
];
