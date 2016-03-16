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
 * offsetExists( $offset )          isset();
 *
 * offsetGet( $offset );            $obj[1];  取值时调用
 *
 * offsetSet( $offset, $value );    $obj[1] = 11;  设置值时调用
 *
 * offsetUnset( $offset );          unset($obj[1]);   unset时调用
 *
 */

class Article implements ArrayAccess {

    protected $title;

    protected $author;

    protected $content;

    public function __construct( $title, $author, $content ) {
        $this->title = $title;
        $this->author = $author;
        $this->content = $content;
    }

    public function offsetExists($offset) {
        return array_key_exists( $offset, get_object_vars($this) );
    }

    public function offsetGet($offset) {
        if ( $this->offsetExists($offset) ){
            return $this->{$offset};
        } else {
            return false;
        }
    }

    public function offsetSet($offset, $value) {
        if ( $this->offsetExists( $offset ) ){
            $this->{$offset} = $value;
        }
    }

    public function offsetUnset($offset) {
        if ( $this->offsetExists($offset) ){
            $this->{$offset} = null;
            return true;
        }

        return false;
    }
}

$article = new Article('titlexxx','jaylee', 'this is content');

print_r( $article );

var_dump($article['title']);

var_dump( isset($article['author']) );

$article['title'] = 'xxxxxx';

var_dump( $article['title'] );

unset( $article['title'] );

var_dump( $article['title'] );
