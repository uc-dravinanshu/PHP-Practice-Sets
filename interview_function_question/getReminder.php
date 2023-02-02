<?php
 function getReminder($a,$b){
    foreach($a as $k => $v){
        $new[] = $a[$k] % $b[$k];
    }
    return $new;
 }
 echo getReminder(1,2);
?>