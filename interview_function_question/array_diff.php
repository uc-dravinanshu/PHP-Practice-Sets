<?php
   function findDiff($input1, $input2){
    $output = array_diff($input1, $input2);
    return $output;
   }
   $input1=["john","stuart","Mike","bread","Leo"];
   $input2 = ["20","35","45","28","bread","Leo"];
   print_r(findDiff($input1, $input2));
?>