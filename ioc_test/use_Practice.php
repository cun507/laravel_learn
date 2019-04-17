<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19-4-12
 * Time: 下午6:40
 */
$test = function ($data) {
    echo $data;
};

$test('ceshi yong de ');


function test($abc)
{
    if ($abc == true) {
        return function ($a, $b) {
            return $a+$b;
        };
    }
    if ($abc == false) {
        return function ($a, $b) {
            return $a-$b;
        };
    }
}

$add = test(1);
echo $add(5,2);

$add = test(0);
echo $add(5,2);

/**
 * @param $opt
 * @param $a
 * @return mixed
 */
function test1($opt) {
    return function ($a,$b) use ($opt){
        return $a*$b;
    };
}
$add = test1(1);
echo $add(5,2);

function test3($first)
{
    $param2 = 'everybody';

    $func = function ($first) use ($param2) {
        // use子句 让匿名函数使用其父作用域的变量
        print $first . ' ' . $param2;
    };
    return $func;
}
$anonymous_func = test3('hello');
$anonymous_func('hello');


