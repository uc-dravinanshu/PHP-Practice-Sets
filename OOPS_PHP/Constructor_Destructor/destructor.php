<?php
class class1{
   
    function __construct($z){
        echo "constructor first </br>";
        $this->x=10; # if you define any vraiable inside in constructor plz write $this->X=10;
        $this->y=$z;
    }
    function fun1(){
        echo "hello &nbsp;";
        echo $this->x."</br>"; #for retrieve the value use $this->x
        echo $this->y."</br>";
    }
    function __destruct(){
        echo "destructor last </br>";
    }
}


$obj1 = new class1(20);
$obj1->fun1();





?>