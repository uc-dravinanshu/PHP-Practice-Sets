<?php
  
  //access contol, means iska data who can access. * means al website access.
  header("Access-Control-Allow-Origin: *");

  //api jo data return karega wo json ka hoga.
  header('Content-Type: application/json');

  //header for access contol ka method post method.
  header('Access-Control-Allow-Methods: POST');

  //tell us kis-2 type ke header ko allow krna hai.
  header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Methods, Access-Control-Allow-Headers, Athorization, X-Request-With');

  //how to get requsest....
  //this, file_get_contents("php://input") this function read as a string.
  //this,json_decode(file_get_contents("php://input")); function return josn string into php objrct data.  
  
  $data = json_decode(file_get_contents("php://input"),false);
//php://input this function read koi bhi raw data. koi bhi formate ho.

error_reporting(0);
require("db_config.php");

  if($data->product_name==""){
    echo json_encode(array('message'=>'Product Name Not provided', 'Staatus'=> false)); 
  }else if($data->product_price==""){
    echo json_encode(array('message'=>'Product Price Not provided', 'Staatus'=> false)); 
  }else if($data->stock==""){
    echo json_encode(array('message'=>'Product Stock Not provided', 'Staatus'=> false)); 
  }else if($data->discount==""){
    echo json_encode(array('message'=>'Product Discount Not provided', 'Staatus'=> false)); 
  }else{
      $sql = "INSERT INTO `products` (`product_name`, `product_price`, `stock`, `discount`) VALUES ('$data->product_name', $data->product_price, $data->stock, $data->discount)";

      $res = mysqli_query($conn, $sql) or die("SQL query Failed");

      if($res) {
          echo json_encode(array('message'=>'Product Added', 'Staatus'=> true));
      }else{
          echo json_encode(array('message'=>'Product Not Added', 'Staatus'=> false));
      }
  }

?>