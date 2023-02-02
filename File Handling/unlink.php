<?php
 $file = "oldfile.txt";

 if(file_exists($file)){
   unlink("oldfile.txt");
   echo "removed File";
 }else{
    echo "File Does not Exists";
 }

?>