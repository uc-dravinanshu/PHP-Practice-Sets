<?php
 $name=array("Ram","Shyam","Mohan","Ashu");
 $age=array("42","40","38","37");

 $newArray = array_combine($name,$age);

 echo "<pre>";
 print_r($newArray);
 echo "</pre>";

?>