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

  //DELETE QUERY.
  $sql = "DELETE FROM `student` WHERE `id`=?";

  //prepare the statement.
   $res = mysqli_prepare($conn, $sql);

   if($res){
   //bind variable to prepare statement as parameter.
   mysqli_stmt_bind_param($res,'i',$id);
  
   //variable and value.
   $id = 6;

   //execute.
   mysqli_stmt_execute($res);

   //affected rows.
   echo mysqli_stmt_affected_rows($res)."row deleted </br>";
   }
   //close prepare statement.
   mysqli_stmt_close($res);

   //close connection.
   mysqli_close($conn);

?>