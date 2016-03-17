<?php
/**
 * Created by PhpStorm.
 * User: Jaylee
 * Date: 16/3/17
 * Time: 23:30
 */

/**
 * 虽然实现了ArrayAccess接口可以像操作数组那样,却无法使用foreach遍历,除非实现Iterator接口
 * 另一种方法就是实现IteratorAggregate接口
 * getIterator返回一个Iterator的Object
 *
 * ArrayIterator  把对象或数组封装为一个可以通过foreach来操作的类
 *
 */

class Article implements IteratorAggregate {

    public $title;
    public $author;
    public $content;

    public function __construct( $title, $author, $content ) {
        list( $this->title, $this->author, $this->content ) = [$title, $author, $content];
    }

    public function getIterator() {
        return new ArrayIterator($this);
    }
}

$article = new Article('test title', 'test author', 'content .....');

foreach( $article as $key => $value ){
    var_dump( $key, $value );
}
