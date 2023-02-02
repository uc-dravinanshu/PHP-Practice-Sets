<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <h1>drop Down</h1>
    select any color:<select name="drop_down">
        <option value="0">Please select</option>
        <?php
          $color = array("red","green","blue","yellow","purple","dark");
          foreach($color as $val){
                echo "<option value='<? $val ?>'>";
                echo $val;
                echo "</option>";
          }
            
        ?>
    </select>
   
</body>
</html>