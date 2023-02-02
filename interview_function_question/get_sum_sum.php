<?php
 function getSum($input){
    $sum = array_sum($input);
    return $sum;
 }
 $input = ["1","2","3","4","5","6","7"];
  echo getSum($input);

?>