<?php
#remove PHP tags in PHP.
  function removeTags($input){
    $output = strip_tags($input,"<b>");
    return $output;
  }

  $input = "Hello <div><b>word</b></div><p></p>";
  echo removeTags($input);

?>
