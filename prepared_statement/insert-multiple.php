<?php
$hname = "localhost";
$uname = "root";
$pass = "";
$db = "test";

$conn = mysqli_connect($hname, $uname, $pass, $db);
if(!$conn){
   die("cannot connect to Database".mysqli_connect_error());
}

echo "connected successful <hr></br>";

//insert the data.
$sql = "INSERT INTO `student` (name, roll, address) VALUES (?, ?, ?)";

//prepare statement.
$res = mysqli_prepare($conn, $sql);

if($res){
    //bind variables to the parameters makers of a prepared statement.
    mysqli_stmt_bind_param($res,"sis",$name, $roll, $address);

    //give variables values.
    $name= "Anmol Singh";
    $roll=109;
    $address="Prayagraj";

    //execute the prepared statement.
    mysqli_stmt_execute($res);

    //give variables values again for multiple values.
    $name= "Ajay Singh";
    $roll=110;
    $address="Noida";

    //execute the prepared statement, execute it again.
    mysqli_stmt_execute($res);
}
?>