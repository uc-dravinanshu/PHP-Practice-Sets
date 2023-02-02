<?php
  $a = array();
  $a[0] = 1;
  unset($a[0]);
  echo (!$a  = null) ? 'TRUE':'FALSE';
?>