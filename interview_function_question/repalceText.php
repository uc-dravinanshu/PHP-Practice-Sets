<?php
 function replaceText($input){
    $string = json_encode($input);
    $replace = str_ireplace("apps","sales",$string);
    $output = json_decode($replace,true);
    return $output;
 }
 $input = '[{"category":"Consumer","price":"18.9","number":"5"},{"category":"Industrial","price":"13.4","number":"4"},{"category":"Technology","price":"15.5","number":"3"}]';

  echo replaceText($input);

?>