<?php
class class1{
    private $num;
    function __construct(){
        $this->num=1;
    }
}

class class2 extends class1{
    function getNum(){
        return $this->num;
    }
}

$obj = new class2();
echo $obj->getNum();

?>