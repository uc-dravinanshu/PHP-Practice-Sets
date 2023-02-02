<?php
class person{
    public $name;
    function __construct($n){
        return $this->name=$n;
    }
    function show(){
        echo "Your Name is = ".$this->name."</br>";
    }
    
}
$obj1 = new person("Dravinanshu Mishra");

echo $obj1->show();

?>