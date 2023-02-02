<?php
require_once("db_connection.php");


$sql ="SELECT * FROM `student`";

$res = $conn->query($sql);
if($res->num_rows > 0){
    $data = array();
    while ($row = $res->fetch_assoc()){
        $data[] = $row;
    }
}

//returning json format data as response to ajax.
echo json_encode($data);


?>