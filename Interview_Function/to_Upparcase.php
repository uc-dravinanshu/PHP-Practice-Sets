<?php
 #write a function toUpper case to convert the first character of each word
 # in string to Upper case using a pre-defined function.
 function toUpper($text){
    $output = ucwords($text);
    return $output;
 }
 $text = "hello word"; 
 echo toUpper($text);

?>