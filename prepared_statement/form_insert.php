<?php
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DB","test");

$conn = mysqli_connect(HOST,USER,PASS,DB);
if(!$conn){
    die("connection failed - ".mysqli_connect_error());
}
echo "Connection successfully <hr/></br></br>";

//validation==> kya submit button pr submit name set hai kya.
if(isset($_POST['submit'])){
    //for checking empty field.
    if(($_POST['name']=="") || ($_POST['roll']=="") || ($_POST['address']=="")){
        echo "<h3>Plz Fill all Fields first...</h3>";
    }else{
       //first insert the data.
       $sql = "INSERT INTO `student` (name, roll, address) VALUES (?, ?, ?)";

       //prepare the statement.
       $res = mysqli_prepare($conn, $sql);

       if($res){
           //bind the variables to prepare statement as parameter.
           mysqli_stmt_bind_param($res,'sis',$name, $roll, $address);
           
           //variable and values.
           $name = $_POST['name'];
           $roll = $_POST['roll'];
           $address = $_POST['address'];

           //Execute the prepared statement.
           mysqli_stmt_execute($res);

           //how many rows affected.
          echo mysqli_stmt_affected_rows($res)." Row Inserted</br></br>";
           echo "Data inserted";
       }else{
          echo "Not inserted...!!";
       }
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
    <!---------------------Form-------------------->

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control shadow-none"/>
                    </div>
                    <div class="form-group">
                        <label for="roll" class="form-label">Roll</label>
                        <input type="text" name="roll" id="roll" class="form-control shadow-none"/>
                    </div>
                    <div class="form-group">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" id="address" class="form-control shadow-none"/>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 shadow-none" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
<?php
   //close connection.
   mysqli_close($conn);
?>