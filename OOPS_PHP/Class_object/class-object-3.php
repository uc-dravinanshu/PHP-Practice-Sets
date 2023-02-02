<?php
 class person{
    public $name;
    function show(){
       return $this->name;
    }
 }
 $obj = new person(); #first create an object.
  
 echo $obj->name="Dravinanshu Mishra"; #second assign a value.

 $obj->show(); # third call the function.

?>