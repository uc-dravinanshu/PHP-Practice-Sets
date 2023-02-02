<?php
$arr = array(
    array("id"=>"2201","name"=>"Anil Kapoor"),
    array("id"=>"2202","name"=>"Jhone wick"),
    array("id"=>"2203","name"=>"salman Khan")
);

echo "<pre>";
echo print_r(array_column($arr,"id"));

?>
