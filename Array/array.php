<?php

 #############creating array in PHP##########
 $name = array("dravinanshu Mishra","Ashu Mishra", "Jhon Doe");
 print_r($name);
 echo "<br/>".$name[0]."<br/>";
 echo "<br/>".$name[1]."<br/>";
 echo "<br/>".$name[2]."<br/>";

 ###How To add any element in array.
 $name[3] = "OK";
 $name[4] = "Hahaha";
 print_r($name);

 for($i=0; $i<count($name); $i++){
  echo "<br/>";
  echo $name[$i]."<br/>";
 }
?>