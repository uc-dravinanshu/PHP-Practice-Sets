<?php
$hname = "localhost";
$uname = "root";
$pass = "";
$db = "test";

$con = mysqli_connect($hname, $uname, $pass, $db);
if(!$con){
   die("cannot connect to Database".mysqli_connect_error());
}
echo "connected successful <hr></br>";

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <?php
           //select for all data.
           $sql = "SELECT * FROM `student`";

           //first: prepare an sql statement for an execution.
            $res = mysqli_prepare($con, $sql);

            //second:  bind the columns of a result set to variable. 
            mysqli_stmt_bind_result($res, $id, $name, $roll, $address);

             //third: it accept a prepared statement object as a parameter and execute it. 
             mysqli_stmt_execute($res);

             //fourth: it transfer the result set from a prepared statement.
             mysqli_stmt_store_result($res);

             //fifth: it returns the number of rows in statement result set. 
                if(mysqli_stmt_num_rows($res) > 0){
                  echo '<table class="table">';
                     echo '<thead>';
                        echo '<tr>';
                            echo '<th>ID</th>';
                            echo '<th>NAME</th>';
                            echo '<th>ROLL</th>';
                            echo '<th>ADDRESS</th>';
                        echo '</tr>';
                     echo '</thead>';
                     echo '<tbody>';
                        //fetch all the data.
                        while(mysqli_stmt_fetch($res)){
                            echo "<tr>";
                                echo "<td>".$id."</td>";
                                echo "<td>".$name."</td>";
                                echo "<td>".$roll."</td>";
                                echo "<td>".$address."</td>";
                            echo "</tr>";
                        }
                     echo '</tbody>';
                  echo '</table>';
                }else{
                    echo "O result found";
                }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
<?php
//six: close the prepared statement.
mysqli_stmt_close($res);

//seven: close the connection.
mysqli_close($con);
?>