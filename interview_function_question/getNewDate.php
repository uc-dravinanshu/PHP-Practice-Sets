<?php
 function getNewDate($input){
    $dt = strtotime($input);
    $output = date("Y-m-d",strtotime("+10 days",$dt));
    return $output;
 }
 $input = "2020-12-12";
 echo getNewDate($input);

?>