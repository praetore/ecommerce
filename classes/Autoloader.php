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
    /**
     * @param $class
     */
    public function load($class)
    {
        $dir = join(array(dirname(__DIR__), 'classes'), DIRECTORY_SEPARATOR);
        $file = $dir . DIRECTORY_SEPARATOR . $class . '.php';

        include $file;
    }
}