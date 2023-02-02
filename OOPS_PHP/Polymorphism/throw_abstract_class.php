<?php
//abstract.

//same function behave differently in different class. 
//for ex: class2 & class3.

abstract class class1{
    public abstract function fun1();
}

class class2 extends class1{
    function fun1(){
        echo "fun1";
    }
}

class class3 extends class2{
    function fun1(){
      echo "fun2";
    }
}

$obj = new class3();
$obj->fun1();


?>