<?php
 class calculation{
    //property define.
    public $a, $b,$c;
    function sum(){
        $this->c=$this->a+$this->b;
        return $this->c;
    }
 }
  $c1 = new calculation();
  $c2 = new calculation();

  $c1->a=10;
  $c1->b=20;

  $c2->a=20;
  $c2->b=40;

  echo "This is a class and object first example = ";
  echo $c1->sum();

  echo "<br>";

  echo $c2->sum();

?>