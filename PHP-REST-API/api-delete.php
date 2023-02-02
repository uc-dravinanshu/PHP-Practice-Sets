<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Method, Access-Control-Allow-Header, Athorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"),true);

$student_id = $data['sid'];

require("db_config.php");

$sql = "DELETE FROM `student` WHERE `id`={$student_id} ";

$res = mysqli_query($conn, $sql) or die("SQL query Failed");

if($res) {
  echo json_encode(array('message'=>'Student Record Deleted', 'status'=>true));
}else{
    echo json_encode(array('message'=>'Student Record Not Deleted', 'status'=>false));
}
?>