<?php
  $num = 10;
  $string = "This is an string";
  $bool = TRUE;
  $nums=10.12;
  $arr = array("10","20","30");



  echo "The Data Type of num is ".gettype($num)." = $num<br>";
  echo "The Data Type of string is ".gettype($string)." = $string<br>";
  echo "The Data Type of bool is ".gettype($bool)." = $bool<br>";
  echo "The Data Type of nums is ".gettype($nums)." = $nums<br>";
  echo"The Data type of arr is = ";
  print_r(gettype($arr));

  echo "<br/>";



?>