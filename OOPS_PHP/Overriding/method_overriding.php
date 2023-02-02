<?php
class base{
    public function calc($a, $b){
        return $a*$b;   
    }
}

class derived extends base{
    public function calc($a, $b){
        return $a+$b;
    }
}


$test = new derived();
echo $test->calc(10,20)."</br>";

$test2 = new base();
echo $test2->calc(10,20);


?>