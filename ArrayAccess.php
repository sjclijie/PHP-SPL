<?php
/**
 * Created by PhpStorm.
 * User: Jaylee
 * Date: 16/3/16
 * Time: 23:58
 */

/**
 * 实现ArrayAccess接口,可以使用Object像array那样操作
 *
 * ArrayAccess接口必须实现下面四个方法
 *
 * offsetExists( $offset )          array_key_exists();
 *
 * offsetGet( $offset );            $obj[1];  取值时调用
 *
 * offsetSet( $offset, $value );    $obj[1] = 11;  设置值时调用
 *
 * offsetUnset( $offset );          unset($obj[1]);   unset时调用
 *
 */

class Article implements ArrayAccess {

    public function offsetExists($offset) {
        // TODO: Implement offsetExists() method.
    }

    public function offsetGet($offset) {
        // TODO: Implement offsetGet() method.
    }

    public function offsetSet($offset, $value) {
        // TODO: Implement offsetSet() method.
    }

    public function offsetUnset($offset) {
        // TODO: Implement offsetUnset() method.
    }
}