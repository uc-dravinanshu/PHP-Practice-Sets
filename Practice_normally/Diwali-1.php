<?php
class calculator{
    public $a, $b, $c;

    public function show(){
        $this->c=$this->a+$this->b;
        return $this->c;
    }
}

$calculator = new calculator();

$calculator->a=10;
$calculator->b=20;
echo $calculator->show();

?>