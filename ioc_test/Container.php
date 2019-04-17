<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19-4-12
 * Time: 下午12:13
 */



/*function __autoload($classname)
{
    if (in_array($classname, ['Fight', 'Shot', 'Force'])) {
        $file = 'Power1.php';
    } else {
        $file = $classname . '.php';
    }
    if (is_file($file)) {
        require_once($file);
    }
}*/
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
interface SuperModuleInterface
{
    public function activity(array $target);
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

class Container
{
    protected $binds;

    protected $intrances;

    public function bind($abstract, $concrete)
    {
        if ($concrete instanceof Container) {
            $this->binds[$abstract] = $concrete;
        } else {
            //echo '<pre>';var_dump($concrete);
            $this->intrances[$abstract] = $concrete;
        }
    }

    public function make($abstract, $parameters = [])
    {
        if (isset($this->intrances[$abstract])) {
            return $this->intrances[$abstract];
        }

        array_unshift($parameters, $this);

        return call_user_func_array($this->binds[$abstract], $parameters);
    }
}

$container = new Container();
$container->bind('Superman', function ($container, $moduleName) {
    return new Superman($container->make($moduleName));
});
$container->bind('Xpower', function ($container){
    return new Xpower;
});

$superman_1 = $container->make('Superman', 'Xpower');

echo '<pre>';var_dump($superman_1);