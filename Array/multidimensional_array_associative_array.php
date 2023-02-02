<?php
  $name = array(
    "Peter"=>array("Name"=>"Peter","Course"=>"MCA"),
    "Jack"=>array("Name"=>"Jack","Course"=>"BCA"),
  );
  foreach($name as $key => $val){
    echo " \"$key\" => &nbsp;";
    foreach($val as $k => $v){
        echo $k." ".$v." ";
    }
    echo "</br>";
  }

?>