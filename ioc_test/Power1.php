<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 19-4-11
 * Time: 下午6:04
 */
class Power1
{
    protected $ability;
    protected $range;

    public function __construct($ability, $range)
    {
        $this->ability = $ability;
        $this->range   = $range;
        echo $this->ability;
    }

    public function show(){
        echo $this->ability;
    }
}
class Fight
{
    public function __construct($ability, $range)
    {
        return  $ability;
    }

}
class Force
{
    public function __construct($ability, $range)
    {
        return  $ability;
    }

}
class Shot
{
    public function __construct($ability, $range)
    {
        return  $ability;
    }

}

