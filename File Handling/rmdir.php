<?php

if(file_exists("NewFolderAshu")){
    rmdir("NewFolderAshu");
    echo "folder is removed";
}else{
    echo "Folder Does not Exists";
}
 
?>