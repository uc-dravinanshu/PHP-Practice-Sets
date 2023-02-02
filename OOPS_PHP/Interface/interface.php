<?php
interface parent1{
    public function calc($a, $b);
}

interface parent2{
    public function sub($c, $d);
}

class derived_class implements parent1, parent2{
    function calc($a,$b){
       return $a+$b." clac function <br><br>";
    }
    function sub($c,$d){
       return $c-$d." sub function<br><br>";
    }
}
$ob = new derived_class();
echo $ob->calc(20,10);
echo $ob->sub(20,10);
?>