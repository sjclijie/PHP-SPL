<?php
/**
 * Created by PhpStorm.
 * User: Jaylee
 * Date: 16/3/20
 * Time: 22:49
 */

/**
 *
 * 用来限定返回结果集的数量, 必须提供offset 和limit 参数,类似sql limit语句
 *
 */

$arr = ['a','b','c','d','e'];

$iterator = new ArrayIterator( $arr );

$limitIterator = new LimitIterator( $iterator, 1, 4 );

foreach ( $limitIterator as $key => $item ) {

    echo $key ."====>". $item. '<br />';
}

echo "<hr />";

$cachingIterator = new CachingIterator( $limitIterator );

foreach ( $cachingIterator as $key => $item ){
    echo $key ."====>". $item;

    if ( $cachingIterator->hasNext() ){
        echo ",";
    }
}


