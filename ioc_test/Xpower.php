<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19-4-12
 * Time: 下午12:06
 */


class Xpower implements SuperModuleInterface
{
    public function activity(array $target)
    {
        // TODO: Implement activity() method.
        return "X-power";
    }
    public function show(){
        echo 123;
    }
}