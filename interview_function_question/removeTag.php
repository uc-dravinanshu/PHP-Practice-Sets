<?php
  function removeTag($input){
    $output = strip_tags($input,"<b>");
    return $output;
  }
  $input = "<p>Hello<b> word</b><h1></h1>";
  echo removeTag($input);
?>


