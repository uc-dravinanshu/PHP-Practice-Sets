<?php
class person{
    public $a, $b, $c;
    function sum(){
        $this->c=$this->a+$this->b;
        return $this->c;
    }
    function sub(){
        $this->c=$this->a-$this->b;
        return $this->c;
    }
}
$obj1 = new person();

$obj1->a=50;
$obj1->b=30;
echo $obj1->sum()."</br>";

$obj1->a=50;
$obj1->b=30;
echo $obj1->sub();

?>