<?php
 $str = "This is a Ram. Ram was a great god of the earth";

 $str1 = explode(" ",$str);
 echo "<pre>";
 print_r($str1);
 echo "</pre>";

/* for($i=0; $i<count($str1); $i++){
    echo $str1[$i]." ";
 }*/
 foreach($str1 as $str2){
    echo $str2." ";
 }

?>