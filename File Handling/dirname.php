<?php
$file = "readme.txt";

$path = realpath($file);
echo dirname($path,2);


?>