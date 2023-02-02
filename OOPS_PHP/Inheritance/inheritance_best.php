<?php
class class1{
    public $num;
 function __construct(){
    $this->num=1;
    //echo "construct1 </br>";
 }
 function fun1(){
    echo "func1 </br>";
 }

}

class class2 extends class1{
   function __construct(){
    parent::__construct();
    $this->num=2;
    echo "constructor2 </br>";
    
    
   }
   function fun1(){
    echo "func2 </br>";
 }
}

$Obj1 = new class2();
//$Obj1->fun1();
echo $Obj1->num;
?>