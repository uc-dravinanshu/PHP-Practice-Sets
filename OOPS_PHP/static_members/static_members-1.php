<?php
class parent1{
    public static $name="Dravinanshu Mishra";
    public function __construct($n){
        echo self::$name=$n;
    }
    public static function show(){
        echo self::$name;
    }
}
 //echo parent1::$name."<br>";
  //parent1::show();

$obj = new parent1("Maa");
$obj->show();

?>