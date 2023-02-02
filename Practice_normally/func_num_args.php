<?php
  function Simple(){
    $numbers = func_num_args();
    echo "Number of Arguments: $numbers\n";
  }
  Simple(7,8,9,10);
?>