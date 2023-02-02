<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');

//rest API pass method.
header('Access-Control-Allow-Methods:POST');

//security pupose.
header('Access-Control-Allow-Headers: Access-Control-Allow-Header,Content-Type,Access-Control-Allow-Method, Authorization, X-Requested-With');

//here, Access-Control-Allow-Method ye pass nahi hoga because ye already security hai,
// Autorization means koi bhi website isse easily accsess kr sakti hai.
//X-Requested-Width: ==> insert karene ke liye value ajax ke throw aaye.

$data = json_decode(file_get_contents("php://input"),true);
//php://input this function read koi bhi raw data. koi bhi formate ho.

//take values.
$name = $data['sname'];  
$age = $data['sage'];
$city = $data['scity'];

require("db_config.php");

$sql = "INSERT INTO `student` (`name`, `age`, `city`) VALUES ('{$name}', {$age}, '{$city}')";

$res = mysqli_query($conn, $sql) or die("SQL query Failed");

if($res) {
    echo json_encode(array('message'=>'Student Records Inserted', 'Staatus'=> true));
}else{
    echo json_encode(array('message'=>'Student Records Not Inserted', 'Staatus'=> false));
}
?>