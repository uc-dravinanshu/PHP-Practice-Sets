<?php
class class1{
    private $num;
    function __construct(){
        $this->num=1;
    }
 function getDataP(){
        echo "Hello1";
    }
}
class class2 extends class1{
    protected function getData(){
      echo "hello2";
    }
}
$obj=new class2();
$obj->getData();


?>