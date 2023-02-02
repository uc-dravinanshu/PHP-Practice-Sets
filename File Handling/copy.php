<?php
$file = "readme.txt";

//echo readfile("readme.txt");
 if(file_exists($file)){
     echo readfile("readme.txt");
     copy($file,"newfile.txt");
 }else{
  echo "File does not exist";
 }
?>