<?php
 function calc($price, $tax="2"){
    $total = $price + ($price * $tax);
    echo "$total";
 }
 calc(42);

?>