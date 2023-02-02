<?php
namespace pro\vi\commnad;
class product{
    public function __construct(){
        echo "Product class ";

        $test = new \test\product;
     }
}


function wow(){
    echo "wow from product class<br>";
}
?>