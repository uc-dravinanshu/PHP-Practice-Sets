<?php
require("db_connection.php");

//retrive students data .

$sql ="SELECT * FROM `students`";

$res = $con->query($sql);

$data = array();
if($res->num_rows > 0){
    while($row = $res->fetch_assoc()){
      $data[] = $row;
    }
}

//php array converts into json string data.
//it returning JSON formate data  as response to ajax call.
echo json_encode($data);


?>