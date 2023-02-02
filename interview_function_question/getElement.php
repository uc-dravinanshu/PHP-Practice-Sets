<?php
function getElement($input){
    $input = preg_grep("/^S/", $input);
    return $input;
}
$input = ["John","Stuart","Shawn","Mike","Jack","Smith"];

echo "<pre>";
print_r(getElement($input));
echo "</pre>";

?>
