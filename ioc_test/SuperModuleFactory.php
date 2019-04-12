<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19-4-11
 * Time: 下午7:24
 */


class SuperModuleFactory
{
    public function makeModule($moduleName, $options)
    {
        switch ($moduleName) {
            case 'Fight':     return new Fight($options[0], $options[1]);
            case 'Force':     return new Force($options[0]);
            case 'Shot':     return new Shot($options[0], $options[1], $options[2]);
        }
    }
}