<?php
  class demo{
    //defining a variable 
    private $pri = "private";
    public $pub = "public";
    protected $pro = "protected";

    //public function.
    public function display(){
         echo $this->pri." ";
         echo $this->pub." ";
         echo $this->pro." ";
    }
  }
  $obj = new demo();
  $obj->display();
?>