<?php
 require_once("db_connection.php");

 $data = stripslashes(file_get_contents("php://input"));
 $mydata = json_decode($data, true);
 $id = $mydata['sid'];

 //retrieve the data.
  $sql ="SELECT * FROM `student` WHERE `id`='{$id}'";
  $res = $conn->query($sql);
  $row = $res->fetch_assoc();

  //returning json code .
  echo json_encode($row);
?>