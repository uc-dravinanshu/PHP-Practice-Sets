<?php
//Array using in function.
//here array type hinting means only array value accept here.
function Fruit(Array $name){
    foreach($name as $k){
        echo $k."<br/>";
    }
}

$f= array("Apple","Banana","grapes");
Fruit($f);

?>