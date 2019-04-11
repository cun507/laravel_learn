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
        echo 123;
    }
}