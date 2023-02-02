<?php
 $file = "readme.txt";

 echo "<pre>";
 print_r(pathinfo($file,PATHINFO_EXTENSION));
 echo "</pre>";


?>