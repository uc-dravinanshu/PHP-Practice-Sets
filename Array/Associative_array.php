<?php
  $name = array("Name"=>"Dravinanshu Mishra", "Course"=>"MCA","College"=>"Integral University");

  echo "<table>";
  foreach($name as $key => $val){
    echo "<tr>";
    echo "<th>".$key."</th>";
    echo "<td>".$val."</td>";
    echo "</tr>";
  }
  echo "</table>";
  
?>