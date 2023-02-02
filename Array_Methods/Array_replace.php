<?php
$fruit = array("Apple","Banana","grapes");

$newFruit = array("Sheb","Kela");

$op = array_replace($fruit,$newFruit);

echo "<pre>";
print_r($op);
echo "<pre>";

foreach($op as $new){
    echo $new." ";
}
echo "<br><br><br><br><br><br><br><br>"; 

$color = array("R"=>"Red","G"=>"Green","B"=>"Blue");

$hindiColor = array("R"=>"Lal","G"=>"hraa","B"=>"Neela");

$output = array_replace($color, $hindiColor);

foreach($output as $k => $v){
    echo $k." ".$v." ";
}
?>