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

    public function __construct($modules)
    {
        $factory = new SuperModuleFactory();
        foreach ($modules as $moduleName => $moduleOptions) {
            $this->power[] = $factory->makeModule($moduleName, $moduleOptions);
        }
    }
    public function fight(){
        set_time_limit(0);
        $num = strval(8662);
        //var_dump(chunk_split($num,1,' '));exit;
        //86627817166278171
        $count = 0;
        for ($i=1;$i<=$num;$i++){
            if($i%2 != 0){
                foreach(explode(' ',chunk_split($i,1,' ')) as $v){
                    if($v == 3){
                        $count++;
                    }
                }
            }

        }
        echo $count;
        exit;
        //707829217
        var_dump($this->power);
    }
}

$super = new Superman([
    'Fight'=>['100','200']
]);
$super->fight();
