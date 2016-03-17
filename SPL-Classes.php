<?php
/**
 * Created by PhpStorm.
 * User: Jaylee
 * Date: 16/3/18
 * Time: 00:23
 */

//查看所有的内置类

foreach( spl_classes() as $key=>$value ){
    echo $key. '=>' . $value.'<br />';
}

//查看一个目录中的文件和子目录
try {

    foreach ( new DirectoryIterator('./') as $item) {
        echo $item.'<br />';
    }
} catch (Exception $e ){
    echo $e->getMessage();
}

//while循环
try {

    $dirIterator = new DirectoryIterator('./');

    while( $dirIterator->valid() ){

        echo $dirIterator->key().'='.$dirIterator->current().'<br />';

        $dirIterator->next();
    }

}catch( Exception $e ){
    echo $e->getMessage();
}

//将array转化为object
$array = ['a','b','c','d','e'];

//这两句的效果等同于  new ArrayIterator( $array );
$arrayObj = new ArrayObject( $array );
$arrayObj->append(1);
$arrayIterator = $arrayObj->getIterator();

foreach( $arrayIterator as $key => $value ){
    echo $key.'=>'.$value.'<br />';
}

//ArrayIterator 其实是对ArrayObject类的补充,它可以提供遍历功能,也支持offset类方法和count()方法
foreach( new ArrayIterator($array) as $key => $value ){
    echo $key.'=>'.$value.'<br />';
}




