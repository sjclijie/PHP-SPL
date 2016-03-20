<?php
/**
 * Created by PhpStorm.
 * User: Jaylee
 * Date: 16/3/20
 * Time: 22:57
 */

/**
 *
 * 用来对文本文件进行遍历
 *
 */

$fileName = './LimitIterator.php';

try {

    foreach (new SplFileObject( $fileName, 'r' ) as $line ){
        echo $line . "<br />";
    }
} catch ( Exception $e ){

    var_dump( $e->getMessage());
}

echo "<hr />";

//返回文件前三行
try {

    foreach ( new LimitIterator( new SplFileObject( $fileName, 'r' ), 0, 3) as $line ) {
        echo $line . "<br />";
    }

}catch ( Exception $e) {

}
