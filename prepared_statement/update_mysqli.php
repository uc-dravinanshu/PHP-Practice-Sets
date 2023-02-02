<?php
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DB","test");

$conn = mysqli_connect(HOST,USER,PASS,DB);
if(!$conn){
    die("Connection failed".mysqli_connect_error());
}
echo "Connection successfully <hr/>";
//update code.
if(isset($_POST['update'])){
  //checking for empty.
  if(($_POST['name']=="") || ($_POST['roll']=="") || ($_POST['address']=="")){
    echo "<small> plz fill all field...</small><hr>";
  }else{
    //update command.
    $sql ="UPDATE `student` SET `name`=?, `roll`=?, `address`=? WHERE id=? ";
    

    //prepare statement.
    $res = mysqli_prepare($conn, $sql);

    if($res){
      //bind variables to the prepares statement as parameter.
      mysqli_stmt_bind_param($res, 'sisi', $name, $roll, $address, $id);

      //variable and values.
      $name=$_POST['name'];
      $roll=$_POST['roll'];
      $address=$_POST['address'];
      $id=$_POST['id'];

      //execute prepare statement.
      mysqli_stmt_execute($res);

      echo mysqli_stmt_affected_rows($res)."Row Updated <br>";
    }
    //close.
    mysqli_stmt_close($res);
  }
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
        <div class="row">
            <div class="col-md-4">
                <?php
                   if(isset($_POST['edit'])){
                    //select.
                    $q="SELECT * FROM `student` WHERE `id`=? ";

                    //prepare.
                    $res = mysqli_prepare($conn, $q);

                    //bind parameter.
                    mysqli_stmt_bind_param($res, 'i', $id);
                    
                    //variable & values.
                    $id=$_POST['id'];

                    //bind result set in a variable.
                     mysqli_stmt_bind_result($res, $id, $name, $roll, $address);

                     //execute.
                     mysqli_stmt_execute($res);

                     //fetch.
                     mysqli_stmt_fetch($res);

                     //close.
                     mysqli_stmt_close($res);

                   }
                 ?>
                 <form action="" method="post">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Name</label>
                        <input type="text" name="name" id="name" value="<?php if(isset($name)) {echo $name;}?>" class="form-control shadow-none" required/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Roll</label>
                        <input type="text" name="roll" id="roll" value="<?php if(isset($roll)) {echo $roll;}?>" class="form-control shadow-none" required/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Address</label>
                        <input type="text" name="address" id="address" value="<?php if(isset($address)) {echo $address;}?>" class="form-control shadow-none" required/>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <button type="submit" class="btn btn-success" name="update">UPDATE</button>
                 </form>
            </div>
            <div class="col-md-6 offset-sm-2">
                <?php
                   //select all the data.
                    $sql ="SELECT * FROM `student`";
                   
                   //prepare statement.
                   $res = mysqli_prepare($conn, $sql);

                   //bind.
                   mysqli_stmt_bind_result($res, $id, $name, $roll, $address);

                   //execute.
                   mysqli_stmt_execute($res);

                   //store result.
                   mysqli_stmt_store_result($res);

                   if(mysqli_stmt_num_rows($res)>0){
                    echo '<table class="table">';
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
                       //Fetch or retrive all the data.
                       while(mysqli_stmt_fetch($res)){
                        echo "<tr>";
                         echo "<td>".$id."</td>";
                         echo "<td>".$name."</td>";
                         echo "<td>".$roll."</td>";
                         echo "<td>".$address."</td>";
                         echo '<td> 
                                <form action="#" method="post">
                                    <input type="hidden" name="id" value='.$id.'/>
                                    <input type="submit" class="btn btn-sm btn-warning" 
                                    name="edit" value="edit"/>
                                </form> 
                              </td>';
                        echo "</tr>";
                       }
                      echo "</tbody>";
                    echo '</table>';
                   }else{
                     echo "0 results";
                   }
                ?>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
  <?php
  //close.
  mysqli_stmt_close($res);
  
  //close.
  mysqli_close($conn);
?>
</html>
