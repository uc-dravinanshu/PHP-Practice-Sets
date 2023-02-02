<?php
$file = fopen("readme.txt","r");

echo "<pre>";
print_r(file("readme.txt"));
echo "</pre>";

?>