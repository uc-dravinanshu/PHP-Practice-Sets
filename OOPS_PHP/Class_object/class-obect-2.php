<?php
   class class1{
      public $a=10;
    function fun1(){
        return $this->a++;
    }
   
   }
   $obj1 = new class1(); #first create an object of class.
   $obj2 = new class1();

   echo $obj1->fun1(). "</br>";   #second call the function with the help of create object variable.
   echo $obj1->a;

   echo "</br>";

   echo $obj2->a;
?>