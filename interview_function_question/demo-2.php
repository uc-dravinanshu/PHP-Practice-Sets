<?php

 function groupByOwner($input){
   foreach($input as $k => $v){
    $new_arr[$v][] = $k;
   } 
   foreach($new_arr as $key => $val){
      $output[$key] = implode(",",$val);
   }
   return $output;
 }
 $input = {
    "help.txt":"john",
    "catalo.txt":"steve",
    "context.txt":"john",
 };

 echo groupByOwner($input);

?>