<?php
function square($n){
    return $n*$n;
}


 $a = [10,20,30,40,50];

 $newArray = array_map('square',$a);
 echo "<pre>";
 print_r($newArray);
 echo "</pre>";



?>