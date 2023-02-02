<?php
  $number = array(
          array(10,20,30),
          array(40,50,60)
  );
  /* foreach($number as $val){
    foreach($val as $v){
        echo $v."&nbsp;";
    }
    echo "</br>";
   } */
   for($i=0; $i<=1; $i++){
    for($j=0; $j<=2; $j++){
        echo $number[$i][$j]."&nbsp;";
    }
    echo "</br>";
   } 
 


?>