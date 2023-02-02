<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');

//rest API pass method. //Put for update.
header('Access-Control-Allow-Methods:PUT');

//security pupose.
header('Access-Control-Allow-Headers: Access-Control-Allow-Header,Content-Type,Access-Control-Allow-Method, Authorization, X-Requested-With');

//here, Access-Control-Allow-Method ye pass nahi hoga because ye already security hai,
// Autorization means koi bhi website isse easily accsess kr sakti hai.
//X-Requested-Width: ==> insert karene ke liye value ajax ke throw aaye.

$data = json_decode(file_get_contents("php://input"),true);
//php://input this function read koi bhi raw data. koi bhi formate ho.

//take values.
$id = $data['sid'];  
$name = $data['sname'];  
$age = $data['sage'];
$city = $data['scity'];

require("db_config.php");

$sql = "UPDATE `student` SET `name`='{$name}', `age`={$age}, `city`='{$city}' WHERE `id`={$id} ";

$res = mysqli_query($conn, $sql) or die("SQL query Failed");

if($res) {
    echo json_encode(array('message'=>'Student Records Updated', 'Staatus'=> true));
}else{
    echo json_encode(array('message'=>'Student Records Not Updated', 'Staatus'=> false));
}
?>