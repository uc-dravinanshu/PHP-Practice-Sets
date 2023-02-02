<?php
  function Union($arr1,$arr2){
     $merge = array_merge($arr1,$arr2);
     $rs = array_unique($merge);
      foreach($rs as $val){
         echo $val."&nbsp;";
      }
  }
  $arr1=array("red","green","blue");
  $arr2=array("red","blue","yellow","dark");

  Union($arr1,$arr2);
 

?>