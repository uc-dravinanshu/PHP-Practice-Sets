<?php
 #public protected private.
 class class1{
    private $num;
    function __construct(){
        $this->num=1;
    }
   
 }
 $ob = new class1();

 //echo $ob->getNum();

 class subclass extends class1{
     function getNum(){
        return $this->num;
     }
 }
 $obj = new subclass();
 echo $obj->getNum();
?>