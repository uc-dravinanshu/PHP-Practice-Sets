<?php
$fruit = ["a"=>"Orange","b"=>"Banana","c"=>"grapes"];
$veggie = ["b"=>['color'=>['red','green','blue']],"e"=>"pea",55,68];
//$color = ['red','blue'];

$newArray = array_merge_recursive($fruit,$veggie); //$color.
echo "<pre>";
print_r($newArray);
echo "</pre>";

?>