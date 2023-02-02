<?php
function compareString($string1, $string2){
   if(strcmp($string1,$string2)==0){
     echo "string matched";
   }else{
    echo "string Not matched";
   }
}
$string1 = "Hello World";
$string2 = "Hello World";

compareString($string1, $string2);

?>