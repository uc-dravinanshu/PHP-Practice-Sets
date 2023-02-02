<?php
 class parent1{
    public static $name = "Dravinanshu mishra";
 }
 class derived extends parent1{
    public static function show(){
        echo parent::$name;
    }
 }
 $obj = new derived();
 $obj->show();
?>