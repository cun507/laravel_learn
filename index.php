<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 19-4-11
 * Time: 下午6:43
 */
function dd($data){
  echo '<pre>';var_dump($data);exit;
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
interface SuperModuleInterface
{
    public function activity(array $target);
}

class Power implements SuperModuleInterface
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

class Container
{
    protected $binds;
    public $instances;

    public function bind($abstract, $concrete)
    {

        if ($concrete instanceof Container) {
            $this->binds[$abstract] = $concrete;
        } else {
            $this->instances[$abstract] = $concrete;
        }

    }

    public function make($abstract, $parameters = [])
    {
        if(isset($this->instances[$abstract])){

            return $this->instances[$abstract];
        }
        //var_dump($this);
        array_unshift($parameters, $this);

        return call_user_func_array($this->binds[$abstract], $parameters);
    }
}

$container = new Container();

$container->bind('Superman', function ($container, $moduleName){
    return new Superman($container->make($moduleName));
});
$container->bind('Power', function ($container){
    return new Power();
});
$superman_1 = $container->make('Power');
dd($superman_1);

