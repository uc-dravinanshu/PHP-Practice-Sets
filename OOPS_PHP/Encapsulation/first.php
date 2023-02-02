<?php
 class class1{
    protected $num;
    function __construct(){
        $this->num=1;
    }
    //this function is called getter function or value get/retrieve.
    function getNum(){
        return $this->num;
    }
 }
 $obj = new class1();
 
 echo $obj->getNum();

?>