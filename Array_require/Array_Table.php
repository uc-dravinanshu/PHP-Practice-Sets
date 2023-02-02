<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   $arr = array(
    array("Name"=>"Amit","Course"=>"MCA","City"=>"Allahabad"),
    array("Name"=>"Sumit","Course"=>"BCA","city"=>"Noida"),
     );
   ?>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Name</th>
        <th>Course</th>
        <th>City</th>
    </tr>
    <?php
      foreach($arr as $datalist){
        echo "<tr>";
        foreach($datalist as $arrDetails){
            echo "<td>".$arrDetails."</td>";
        }
        echo "<tr>";
      }  
 
     ?>
</table>

   
</body>
</html>