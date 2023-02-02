<?php
$food = array("orange","apple","banana","grapes");
  echo array_search("grapes",$food); #it rerurn index number in the case of index array.

 echo "<br><br>";

  $fruit = array("a"=>"Apple","b"=>"Banana","g"=>"Grapes");

  echo array_search("Banana",$fruit); #in the case of associative array it returns it's key.

?>