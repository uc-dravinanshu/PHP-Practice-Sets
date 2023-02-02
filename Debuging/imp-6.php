<?php
$user = array("Akshay","bale","Dravinanshu","Blank");

for($x=0; $x<count($user); $x++){
    if($user[$x] == "Dravinanshu") continue;
    printf ($user[$x]);
}

?>