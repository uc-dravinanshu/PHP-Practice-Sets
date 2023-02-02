<?php
  abstract class parent_class{
    public $name;
    function __construct($name){
        $this->name=$name;
    }
    abstract protected function calc($a, $b);
  }

  class child_class extends parent_class{
    public function calc($c, $d){
         echo $c+$d."</br>";
         echo "hello $this->name";
    }
  }
  $test = new child_class("Dravinanshu Mishra");
  $test->calc(12,12);

?>