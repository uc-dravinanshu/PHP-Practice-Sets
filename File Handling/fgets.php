<?php
$file = fopen("readme.txt","r");

echo fgets($file);
echo ftell($file);

echo "<br>".fgets($file);
echo ftell($file);

echo fseek($file,15);
echo "<br>".ftell($file);

echo fpassthru($file);

echo rewind($file);

?>