<?php
trait t1{
    function fun1(){
        echo "t1:fun1";
    }
}
trait t2{
    function fun2(){
        echo "t2:fun2";
    }
}
class class1{
    use t1,t2;
    function fun3(){
        echo "class1";
    }
}

$obj = new class1();
$obj->fun3();

?>