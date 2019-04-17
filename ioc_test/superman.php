<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 19-4-11
 * Time: 下午6:01
 */


function __autoload($classname)
{
    if (in_array($classname, ['Fight', 'Shot', 'Force'])) {
        $file = 'Power1.php';
    } else {
        $file = $classname . '.php';
    }
    if (is_file($file)) {
        require_once($file);
    }
}

class Superman
{
    protected $power;
    protected $module;

    public function __construct(SuperModuleInterface $modules)
    {
        $this->module = $modules;
        /*$factory = new SuperModuleFactory();
        foreach ($modules as $moduleName => $moduleOptions) {
            $this->power[] = $factory->makeModule($moduleName, $moduleOptions);
        }*/

    }

    public function show(){
        echo $this->module->activity([1]);
    }
}




