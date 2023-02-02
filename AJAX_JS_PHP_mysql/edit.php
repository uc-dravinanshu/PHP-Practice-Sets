<?php
  require("db_connection.php");

  $data = stripslashes(file_get_contents("php://input"));

  $mydata = json_decode($data,true);


  $id = $mydata['sid'];

  //retrieve the specific student data.
  $sql ="SELECT * FROM `students` WHERE `id`={$id}";
  $result = $con->query($sql);
  $row = $result->fetch_assoc();

  //
  echo json_encode($row);

?>