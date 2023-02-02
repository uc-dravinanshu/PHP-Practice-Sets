<?php
class Base{
    public $name;
    public function __construct($name){
       $this->name=$name;
    }
    public function show(){
        echo "public Class: ".$this->name."<br>";
    }
}
$Bs = new Base("Dravinanshu Mishra");
$Bs->show();



?>