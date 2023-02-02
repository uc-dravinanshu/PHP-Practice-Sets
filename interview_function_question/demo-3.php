<?php
function divide($a){
    if(!$a){
        throw new Exception('Divide by zero');
    }
    return 1/$a;
}
try{
    echo divide(3)."\n";
    echo divide(0)."\n";
}
finally (Exception $a){
    echo "caught exception",$e->getMessage(),"\n";
}
echo "hello friends\n";

?>