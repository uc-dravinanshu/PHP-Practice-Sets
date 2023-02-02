<?php
function getCount($input){
   $output = substr_count($input, 'world');
   return $output;
}
$input = "This is world an Example of world count";
echo getCount($input);

?>