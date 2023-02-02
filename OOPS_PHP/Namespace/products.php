<?php
namespace pro;
class product{
    public function __construct(){
        echo "This product class <br>";

        $obj = new \test\product;
    }
}


function wow(){
    echo "wow from products file.<br/>";
}

?>