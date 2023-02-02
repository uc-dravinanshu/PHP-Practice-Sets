<?php
class base{
    public $name="Dravianshu Mishra (Parent) <br>";

}

class derived extends base{
    public $name=" Ashu Mishra (Child Class) <br>";
}

$test = new base();
echo $test->name;

$test2 = new derived();
echo $test2->name;

?>