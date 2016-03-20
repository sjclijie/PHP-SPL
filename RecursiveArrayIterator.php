<?php
/**
 * Created by PhpStorm.
 * User: Jaylee
 * Date: 16/3/20
 * Time: 22:07
 */

/**
 *
 *  ArrayIterator类和ArrayObject类只支持遍历一维数组,如果要遍历多维数组
 *  必须先用RecursiveArrayIterator生成一个Iterator,然后再对这个Iterator使用RecursiveIteratorIterator
 */

$arr = [

    [ "name"=>"aaa", 'age'=>22 ],
    [ "name"=>"bbb", "age"=>23 ],
    [ "name"=>"ccc", "age"=>24 ],
];

$iterator = new RecursiveArrayIterator( $arr );

$recursiveIterator = new RecursiveIteratorIterator($iterator);

foreach ($recursiveIterator as $key => $item) {
    echo $key .'=>'. $item . "<br />";
}


