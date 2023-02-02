<?php
   $x=10;
   function test(){
   # $x=1;
   global $x;
    echo $x;
   }
   test();
   echo "</br>";
   echo $_SERVER['HTTP_REFERER']; 
?>