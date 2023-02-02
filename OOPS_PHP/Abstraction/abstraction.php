<?php
abstract class Car{
  protected $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract protected function intro() : string; 
}

// Child classes
class Audi extends Car {
  public function intro() : string {
    return "The name of audi =  $this->name!"; 
  }
}


// Create objects from the child classes
$audi = new Audi("Audi");
echo $audi->intro();

?>