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

echo "<hr />";

// =====  检查文件扩展名是否符合条件

class FileExtFilter extends FilterIterator {

    protected $_ext = [ 'jpg', 'php' ];

    public function __construct($path)
    {
        $iterator = new RecursiveIteratorIterator( new RecursiveDirectoryIterator( $path ) );

        parent::__construct($iterator);
    }

    public function accept()
    {
        $fileName = $this->current();

        $ext = pathinfo( $fileName, PATHINFO_EXTENSION );

        if ( in_array( $ext, $this->_ext ) ){
            return true;
        }

        return false;
    }
}

$fileExtIterator = new FileExtFilter( './' );

foreach( $fileExtIterator as $key => $item ) {
    echo $key ."=>". $item . "<br />";
}

