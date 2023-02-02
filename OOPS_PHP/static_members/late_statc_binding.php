<?php
class base{
    protected static $name = "Dravinanshu";
    public function show(){
        echo static::$name;
        //echo self::$name;
    }
}
class derived extends base{
    protected static $name = "Mishra";
}

$obj = new derived();
$obj->show();
?>