<?php
$str = "Hello I am \"Dravinanshu Mishra\" ";
 echo $str."</br>";

 echo "addsleshes = ".addslashes($str)."<br>";
 $newstr =  addslashes($str)."<br>";

 echo "strpslashes = ".stripslashes($newstr);

?>