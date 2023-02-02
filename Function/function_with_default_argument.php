<?php
#function with default parameter.
function sum($a, $b=5){
    $c=$a+$b;
    echo $c."</br>";

}
sum(10,20);
sum(30);
?>