<?php
require("db_connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Image_Display.css">
    <title>Document</title>
</head>
<body>
    <h1>Fetching the data into the table</h1>
    <div class="data">
        <table>
            <thead>
                <th>Serial No</th>
                <th>Name</th>
                <th>Profile</th>
            </thead>
            <tbody>
                <?php
                  $query = "SELECT * FROM `user_data`";
                 $rs = mysqli_query($con,$query);
                 while($data = mysqli_fetch_assoc($rs)){
                    echo "<tr>";
                    echo "<td>$data[Serial_No]</td>";
                    echo "<td>$data[UserName]</td>";
                    echo "<td><img src='$data[Profile]' width='150'/></td>";
                    echo "</tr>";
                 }

                ?>
            </tbody>
        </table>
    </div>
</body>
</html>