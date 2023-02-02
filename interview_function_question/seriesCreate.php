<?php
 function seriesCreate($a, $b){
      $sum = 0;
      for($x=$a; $x<=$b; $x++){
        $sum += $x;
      }
      echo "$sum";
 }
 seriesCreate(0,10);

?>