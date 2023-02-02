<?php
class student{
    public $name, $course, $city;

    function __construct($name, $course, $city){
         $this->name=$name;
         $this->course=$course;
         $this->city=$city;
    }
    function college(){
        return $this->name." &nbsp; ".$this->course." &nbsp; ".$this->city;
    }
}
$obj = new student("Dravinanshu Mishra","MCA","Prayagraj");
echo $obj->college();

?>