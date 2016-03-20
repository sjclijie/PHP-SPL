<?php
/**
 * Created by PhpStorm.
 * User: Jaylee
 * Date: 16/3/20
 * Time: 22:13
 */

$arr = [ 'aaa', 'abc', 'bbb', 'bcc' ];

class ArrIterator extends FilterIterator {

    public function __construct(Iterator $iterator)
    {
        parent::__construct($iterator);
    }

    public function accept()
    {
        if ( stripos( $this->current() , 'a') === 0){
            return true;
        }

        return false;
    }
}

$iterator = new ArrIterator( new ArrayIterator( $arr ) );

foreach ( $iterator as $key => $item ){
    echo $key .'=>'. $item. '<br />';
}

