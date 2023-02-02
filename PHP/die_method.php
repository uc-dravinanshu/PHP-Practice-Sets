<?php
  #$file = fopen("readme.txt","r"); 
  #Warning: fopen(readme.txt): Failed to open stream: No such file or directory in C:\xampp\htdocs\Project\PHP\die_method.php on line 2
  #removing this type of errors we can use die() method in php.

  if(!file_exists("readme.txt")){
    die("file not Found");
  }


?>