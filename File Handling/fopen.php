<?php
$file =  fopen("readme.txt","r");

 echo fread($file,100);

?>