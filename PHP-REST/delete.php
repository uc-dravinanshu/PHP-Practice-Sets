<?php
 header('Content-Type: application/json');
 header('Access-Control-Allow-Methods: DELETE');
 header('Access-Control-Allow-Origin: *');
 header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Methods, Access-Control-Allow-Headers, Authorization, X-Requested-With');

 $data = json_decode(file_get_contents("php://input"),false);

 error_reporting(0);
 require("db_config.php");
    

 if($data->id){
     $query = "DELETE FROM `products` WHERE `id`=$data->id";
     $res = mysqli_query($conn, $query);
     if($res){
        echo json_encode(array('message'=>'Product deleted', 'status'=>true));
     }else{
        echo json_encode(array('message'=>'Product Not deleted', 'status'=>false));
     }
     
 }else{
    echo json_encode(array('message'=>'Product Id is Not given', 'status'=>false));
 }

?>