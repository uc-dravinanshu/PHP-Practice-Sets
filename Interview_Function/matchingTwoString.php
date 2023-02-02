<?php
#matching Two string in PHP with the help of function compareString.
  function compareString($string1, $string2){
      if(strcmp($string1,$string2==0)){
         echo "string matched";
      }else{
        echo "sting not matched";
      }
  }
  $string1 = "hello word";
  $string2 = "hello word";

  
  compareString($string1,$string2);

?>