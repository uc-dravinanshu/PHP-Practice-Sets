<?php
$arr = array("Mayank","Dravianshu","Subhas","Ajay","Banarsi Das","captan");

sort($arr);

$len = count($arr);

for($i=0; $i<$len; $i++){
    echo $arr[$i]."&nbsp;";
}


?>