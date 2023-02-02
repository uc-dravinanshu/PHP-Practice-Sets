<?php
class person{
    public $name,$age;
    function __construct($name="no name", $age=0){
           $this->name=$name;
           $this->age=$age;
    }
    function show(){
        echo "Your Name is =".$this->name." age is = ".$this->age."</br>";
    }
}
$obj = new person("Ashu Mishra",24);

$obj->show();

#echo "</br></br>";

$obj1 = new person();

$obj1->show();

?>