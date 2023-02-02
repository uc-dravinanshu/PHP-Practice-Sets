<?php
class Base{
    private $name;
    function __construct($n){
      $this->name=$n;
    }
    function Show(){
        echo $this->name."</br>";
    }
}

$Base = new Base("ashu");
$Base->Show();

class Derived extends Base{
    function get(){
        echo "Name: ".$this->name."</br>";
    }
}
//$derived = new Derived("aman");
//$derived->get();


?>