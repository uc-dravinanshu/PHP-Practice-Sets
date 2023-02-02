<?php
function arrayToString($input){
    $output = implode("*",$input);
    return $output;
}
$input = ["volvo","BMW","Toyota","Bugatti","jaguar","Bentley"];
echo arrayToString($input);
?>