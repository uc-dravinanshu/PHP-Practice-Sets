<?php
$str = "Hello world";

$str2 = password_hash($str,PASSWORD_BCRYPT);

echo $str2."</br>";
if($pass_check = password_verify($str, $str2)){
    echo "True";
}else{
    echo "false";
}
 
//echo $pass_check;


?>