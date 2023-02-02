<?php
 $color  = array("red","green","blue","dark","yellow","55");

// echo in_array("lime",$color);
if(in_array("55",$color, true)){
    echo "True! find successFully";
}else{
    echo "false ! Can't Find";
}

echo "<br><br><br><br><br><br><br>";

$fruit = array("A"=>"Apple","B"=>"Banana","G"=>"Grapes");

 if(in_array("cacke",$fruit)){
     echo "True";
 }else{
    echo "false";
 }
?>