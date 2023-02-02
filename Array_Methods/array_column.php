<?php
$arr = array(
    array("id"=>"2201","name"=>"Anil Kapoor"),
    array("id"=>"2202","name"=>"Jhone wick"),
    array("id"=>"2203","name"=>"salman Khan")
);

$newarr = array_column($arr,"name");

echo "<pre>";
print_r($newarr);
echo "</pre>";
?>

