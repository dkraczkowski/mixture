<?php
/**
 * Alchemy Framework (http://alchemyframework.org/)
 *
 * @link      http://github.com/dkraczkowski/alchemy for the canonical source repository
 * @copyright Copyright (c) 2012-2013 Dawid Kraczkowski
 * @license   https://raw.github.com/dkraczkowski/alchemy/master/LICENSE New BSD License
 */
set_include_path(get_include_path() . PATH_SEPARATOR . realpath(__DIR__ . '/../src/') . PATH_SEPARATOR . __DIR__ . '/bootstrap');


//alchemy framework constans
define('AL_APP_DIR', __DIR__);
define('ASSETS_DIR', __DIR__ . '/bootstrap');
spl_autoload_register(function($className){
    $file = realpath(__DIR__ . '/../src/') . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});
require_once 'test_resources.php';