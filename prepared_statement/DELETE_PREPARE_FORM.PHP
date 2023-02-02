<?php
$hname = "localhost";
$uname = "root";
$pass = "";
$db = "test";

$conn = mysqli_connect($hname, $uname, $pass, $db);
if(!$conn){
   die("cannot connect to Database".mysqli_connect_error());
}
if(isset($_POST['delete'])){
     //delete the Query.
     $sql = "DELETE FROM `student` WHERE `id`=?";

     //first: prepare the statement.
     $res = mysqli_prepare($conn, $sql);

     //second: check karo.
     if($res){
        //bind the variables to prepare statement as parameter.
        mysqli_stmt_bind_param($res,'i' ,$id);


        //variable and values.
        $id=$_POST['id'];

        //execute the prepared statement.

        mysqli_stmt_execute($res);
        
        //how many row affected.
        echo mysqli_stmt_affected_rows($res)." Row Deleted<br>"; 
     }
     mysqli_stmt_close($res);
}
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
           //select all the data.
           $sql = "SELECT * FROM `student`";

           //prepare.
           $res = mysqli_prepare($conn, $sql);

           //bind the result in a variable.
           mysqli_stmt_bind_result($res, $id, $name, $roll, $address);

           //execute statement.
           mysqli_stmt_execute($res);


           //store.
           mysqli_stmt_store_result($res);
            
           //get number of rows.
           if(mysqli_stmt_num_rows($res)>0){
              echo '<table class="table mt-5">';
                echo "<thead>";
                  echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>NAME</th>";
                    echo "<th>ROLL</th>";
                    echo "<th>ADDRESS</th>";
                    echo "<th>ACTION</th>";
                  echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                 //fetches all the data.
                 while(mysqli_stmt_fetch($res)){
                    echo "<tr>";
                     echo "<td>".$id."</td>";
                     echo "<td>".$name."</td>";
                     echo "<td>".$roll."</td>";
                     echo "<td>".$address."</td>";
                     echo  '<td><form action="#" method="post">
                     <input type="hidden" name="id" value='.$id.'>
                     <input type="submit" class="btn btn-sm btn-danger"
                     name="delete" value="delete"></form>
                             </td>';
                    echo "</tr>";
                 }
                echo "</tbody>";
                echo '</table>';
           }
       ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
<?php
//close the preapre statement.
mysqli_stmt_close($res);

//close the connection.
mysqli_close($conn);
?>