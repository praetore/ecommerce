<?php
/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 8-12-15
 * Time: 13:55
 */

namespace Bolt;


class Autoloader
{
    public function load($class)
    {
        $dir = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'classes';
        $file = $dir . DIRECTORY_SEPARATOR . $class . '.php';

        include $file;
    }
}