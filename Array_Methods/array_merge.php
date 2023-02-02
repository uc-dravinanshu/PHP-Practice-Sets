<?php
$fruit = ["a"=>"Apple","b"=>"Banana","c"=>"grapes"];
$veggie = ["a"=>"carrot","f"=>"pea"];
//$color = ['red','blue'];

$newArray = array_merge($fruit,$veggie); //$color.
echo "<pre>";
print_r($newArray);
echo "</pre>";

?>