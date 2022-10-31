<?php

/**
 * This code requires PHP 8.1
 *
 * To test, add some kind of Autoloader for PHP classes. I use my own, which may be found here:
 * https://github.com/lukasznowicki/psr-autoloader
 */

$autoloader_class = __DIR__ . '/Phylax/Autoloader.php';

if (!is_readable($autoloader_class) && !class_exists('Phylax\Autoloader')) {
    exit('Cannot find autoloader, see source file for more information.');
}

if (!class_exists('Phylax\Autoloader')) {
    require_once $autoloader_class;
}

new \Phylax\Autoloader(
    true,
    namespace: 'Phylax\ColorLibrary',
    directory: __DIR__ . '/Phylax/src/ColorLibrary',
);
