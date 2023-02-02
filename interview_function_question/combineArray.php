<?php
 function combineArray($input1, $input2){
   $output = array_combine($input1, $input2);
   return $output;
 }
 $input1 = ["john","stuart","Mike","Brad","Leo"];
 $input2 = ["200","35","25","45","28"];

 echo "<pre>";
 print_r(combineArray($input1,$input2));
 echo "</pre>";

?>