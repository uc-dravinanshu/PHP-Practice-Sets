<?php
 $a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
 $a2 = array("a"=>"red","e"=>"green","d"=>"Purple");

 $newarr = array_diff($a1,$a2);

 echo "<pre>";
 print_r($newarr);
 echo "</pre>";

?>