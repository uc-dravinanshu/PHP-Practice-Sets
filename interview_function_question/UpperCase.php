<?php
   function toUpper($text){
     $output = ucwords($text);
     return $output;
   }
   $text = "hello world";
   echo toUpper($text);

?>