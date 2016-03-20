<?php
/**
 * Created by PhpStorm.
 * User: Jaylee
 * Date: 16/3/20
 * Time: 22:43
 */

/**
 *
 * 该类有一个hasNext()方法,用来判断是否有下一个元素
 *
 */

$array = [ 'a', 'b', 'c', 'd' ];

$object = new CachingIterator( new ArrayIterator( $array ) );

foreach( $object as $key => $value ){

    echo $key.'=>'.$value;

    if ( $object->hasNext() ){
        echo ",";
    }
}