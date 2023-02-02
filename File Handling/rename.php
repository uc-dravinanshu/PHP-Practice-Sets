<?php
$file = "readme.txt";

if(file_exists($file)){
    echo rename("newfile.txt","oldfile.txt");
}else{
    echo "file does not exits";
}

?>