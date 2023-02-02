<?php
class Base{
   //Property Created.
   protected $name, $age;
   public function __construct($name, $age){
    $this->name=$name;
    $this->age=$age;
   }
   protected function show(){
    echo "Protected: ".$this->name."</br>";
    echo "Protected: ".$this->age."</br>";
   }
}
//$bs = new Base("Dravinanshu Mishra",25);
//$bs->show();

class Derived extends Base{
    public function Get(){
        echo "Protected: ".$this->name."</br>";
        echo "Protected: ".$this->age."</br>";
       }  
}
$get = new Derived("Ashu",27);
$get->Get();



?>