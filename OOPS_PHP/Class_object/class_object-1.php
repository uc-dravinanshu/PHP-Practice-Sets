<?php
class calculation{
    //Property of a calculation class.
    #here public is a access modifiers.
    public $a, $b, $c;
    
    #method /function of class calculation.
    function sum(){
      #how to access class calculation property inside in method / function of sum.
      $this->c= $this->a+$this->b;
      return $this->c;
    }
    function sub(){
        #how to access class calculation property inside in method / function of sub.
           $this->c=$this->a-$this->b;
           return $this->c;
     }

}
#create an object of class calculation.
$c1 = new calculation();

#how to assign value $a, $b.
$c1->a=20;
$c1->b=10;

//create an object second and assign a value.

$c2=new calculation();

$c2->a=50;
$c2->b=35;

echo "sum value of c1 = ".$c1->sum();
echo "</br>";
echo "sub value of c2 = ".$c2->sub();



?>