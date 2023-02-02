<?php
 function abc($a){
     $a++;
     return $a;
 }
 $a = 5;
 $b = abc($a);

 echo "value of a = ".$a."<br>";
 echo "value of b = ".$b."<br>";
?>