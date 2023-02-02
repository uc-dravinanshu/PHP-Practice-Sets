<?php
  #index array in PHP.
  $index = array(10,20,30,40);

  echo "<pre>";
  print_r($index);
  echo "</pre>";

  for($i=0; $i<count($index); $i++){
    echo $index[$i]." ";
    echo "<br/>";
  }

  foreach($index as $key => $value){
     echo " key "."[".$key."]"." =  value ".$value."<br/>";
  }
 

?>