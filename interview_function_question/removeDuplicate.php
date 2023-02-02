<?php
function removeDuplicate($input){
    $output  = array_values(array_unique($input));
    return $output;
}
$input = ["1","2","2","3","4","5","5","6","7"];
print_r (removeDuplicate($input));
?>