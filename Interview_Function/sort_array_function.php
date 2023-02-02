<?php
   function sortArray($input){
      arsort($input);
      foreach($input as $x => $v){
        echo $x." ".$v."</br>";
      }
   }
  
   $text = array("A"=>"peter","D"=>"jack","B"=>"amit","C"=>"sumit");

 sortArray($text);

?>