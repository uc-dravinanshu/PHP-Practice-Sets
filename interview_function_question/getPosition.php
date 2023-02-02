<?php
 function getPosition($text){
    $output = strpos($text,"o");
    return $output;
 }
 $text = "hello world";
 echo getPosition($text);
 
?>