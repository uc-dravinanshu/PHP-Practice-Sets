<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Origin, Access-Control-Allow-Methods, Access-Control-Allow-Headers, Authorization, X-Request-with');

error_reporting(0);
$data = json_decode(file_get_contents("php://input"),false);

    require("db_config.php");

    $sql = "SELECT * FROM `products`";
    
    if(isset($_GET['id'])){
        $sql = "SELECT * FROM `products` WHERE `id`=$_GET[id]";
    }
   // through this get method we can access particalr one a data.
    $res = mysqli_query($conn, $sql);

    $products = mysqli_fetch_all($res,MYSQLI_ASSOC); //it fetches all data and converst associative array.
    echo json_encode($products);
 
?>