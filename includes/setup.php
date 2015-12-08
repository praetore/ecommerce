<?php

$dir = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'classes';
$file = $dir . DIRECTORY_SEPARATOR . 'Autoloader.php';

require_once($file);

$autoloader = new \Bolt\Autoloader();
spl_autoload_register(array($autoloader, 'load'));