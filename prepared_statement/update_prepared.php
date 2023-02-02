<?php
$hname = "localhost";
$uname = "root";
$pass = "";
$db = "test";

$con = mysqli_connect($hname, $uname, $pass, $db);
if(!$con){
   die("cannot connect to Database".mysqli_connect_error());
}
echo "connected successfully <hr>";

//update SQL statement.
$sql ="UPDATE `student` SET `name`=?,`roll`=?,`address`=? WHERE `id`=?";

//prepare a statement.
 $res = mysqli_prepare($con, $sql);
if($res){
   //bind the variable into prepare statement.
   mysqli_stmt_bind_param($res, 'sisi', $name, $roll, $address, $id);

   //variable snd values.
   $name = 'Ashuman Mishra';
   $roll=2;
   $address="Noida";
   $id=7;

   //execute prepared statement.
   mysqli_stmt_execute($res);

   echo mysqli_stmt_affected_rows($res)."Row Updated <br/>";
}else{
    echo "something wrong";
}

?>