<?php
  require_once("db_connection.php");

  $data = stripslashes(file_get_contents("php://input"));
  $mydata = json_decode($data, true);
  $id = $mydata['sid'];

  //echo $id;
  //die();

  //delete student.
  if(!empty($id)){
    $sql ="DELETE FROM `student` WHERE `id`='{$id}'";
    if($conn->query($sql) == TRUE){
        echo 1;
    }else{
        echo 0;
    }
  }

?>