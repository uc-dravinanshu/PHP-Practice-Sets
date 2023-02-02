<?php
 $a=array('red','green','blue','yellow','purple','dark','light','light dark');


 $b=array_rand($a,2);
 echo "<pre>";
 print_r($b);
 echo "</pre>";

 echo $a[$b[0]]."</br>";
 echo $a[$b[1]];

?>