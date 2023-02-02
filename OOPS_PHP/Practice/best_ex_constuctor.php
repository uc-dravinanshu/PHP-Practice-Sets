<?php
class students{
    public $name, $course, $age, $address, $city;
    function __construct($name="No Name", $course="No Choose", $age=0, $address="unknown", $city="Undefined"){
       $this->name=$name;
       $this->course=$course;
       $this->age=$age;
       $this->address=$address;
       $this->city=$city;
    }
    function Students_Details(){
        echo "Name : ".$this->name."</br>";
        echo "Course : ".$this->course."</br>";
        echo "Age : ".$this->age."</br>";
        echo "Address : ".$this->address."</br>";
        echo "City : ".$this->city."</br></br>";
    }

}
$obj = new students("Dravinanshu Mishra","MCA",25,"Jhalwa, Prayagraj","Prayagraj");

$obj->Students_Details();

$obj1 = new students();

$obj1->Students_Details();


?>