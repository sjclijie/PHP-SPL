<?php

    /**
     *
     * SPL规定, 实现了Iterator接口的class,都可以用在foreach Loop中.
     *
     * Iterator接口必须实现以下5个方法
     *
     * current();
     *
     * key();
     *
     * next();
     *
     * rewind();
     *
     * valid();
     *
     */

    class ArrayReloaded implements Iterator {

        protected $_array = [];

        protected $_valid = false;

        public function __construct( Array $array ) {
            $this->_array = $array;
        }

        public function current() {
            echo "current <br />";
            return current( $this->_array );
        }

        public function key() {
            echo "key <br />";
            return key( $this->_array );
        }

        public function next() {
            echo "next <br />";
            //将数组内部指针指向数组下一个元素,如果没有下一个元素,则返回false
            $this->_valid = false !== next($this->_array);
        }

        public function rewind() {
            echo "rewind <br />";
            reset( $this->_array );
            $this->_valid = true;
        }

        public function valid() {
            echo "valid <br />";
            return $this->_valid;
        }
    }

    $test = new ArrayReloaded( ['a','b','c', 'd'] );

    foreach( $test as $key=>$item ){
        echo $key.'=='.$item.'<br />';
    }

    /**
     *
     * 方法调用顺序:
     *  1. rewind
     *
     *  2. current
     *  3. key
     *  4. next
     *  5. valid
     *
     *  2,3,4,5循环调用,如果valid返回false,则不会再进行下一次调用
     *
     */