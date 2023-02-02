<?php
//interface.
//same function behave differently in different class. 
//for ex: class2 & class3.

interface class1{
    function fun1();
}

class class2 implements class1{
    function fun1(){
        echo "fun1";
    }
}

class class3 implements class1{
    function fun1(){
        echo "fun2";
    }
}

$obj = new class2();
$obj->fun1();




?>