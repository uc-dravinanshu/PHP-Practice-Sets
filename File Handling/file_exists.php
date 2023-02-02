<?php
//$file = "readme1.txt";
$file = "readme.txt";

//echo readfile("readme.txt");
 if(file_exists($file)){
     echo readfile("readme.txt");
 }else{
  echo "File does not exist";
 }
?>