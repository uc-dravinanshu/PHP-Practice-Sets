<?php
   function countLength($input){
    $length = count($input);
    return $length;
   }
   $input = ["john","jack","mike","tony","cheri","basil"];
   echo countLength($input);

?>