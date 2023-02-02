<?php
  function getMinMax($input){
    $max = max($input);
    echo "Max: ".$max." & ";
    $min = min($input);
    echo "Min: ".$min;
  }
  $input = ["99","22","55","19","17","76","89","100"];

  getMinMax($input);

?>