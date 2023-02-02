<?php
 function getSum($input){
    $output= 0;
    if(preg_match_all('/[0-9]+/', $input, $matches)){
        foreach($matches[0] as $v){
            $output += (int) $v;
        }
    }
    return $output;
 }

 $input = "hello I have 10 apples and 50 bananas".
$ok =  getSum($input);
echo $ok;



?>