<?php
$file = fopen("readme.txt","r");

echo "<ul>";
while(! feof($file)){
     $line = fgets($file);
     echo "<li>".$line."</br></li>";
}
echo "</ul>";

?>