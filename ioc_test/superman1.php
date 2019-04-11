<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 19-4-11
 * Time: 下午6:01
 */
function __autoload($classname)
{
    $file = $classname . '.php';
    if (is_file($file)) {
        require_once($file);
    }
}
class Superman
{
    public function __construct()
    {

    }

    function __autoload($classname)
    {
        $file = $classname . '.php';
        if (is_file($file)) {
            require_once($file);
        }
    }
}

$power = new Power1(1,2);