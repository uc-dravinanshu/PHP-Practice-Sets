<?php
    header("Access-Control-Allow-Origin: *");

    header('Content-Type: application/json');

    header('Access-Control-Allow-Methods: PUT');

    header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Methods, Access-Control-Allow-Headers, Athorization, X-Request-With'); 

    $data = json_decode(file_get_contents("php://input"),false); 
    //$data me se value php object ke form me se value get kare.
    
    error_reporting(0);
    require("db_config.php");
    
    if($data->id){
        //check if id provided by user then update otherwise not update.
        //first: get the user id data.

         $query ="SELECT * FROM `products` WHERE `id`=$data->id";
         $result = mysqli_query($conn, $query);
         $product = mysqli_fetch_assoc($result);
          

         //value get from select ke through from databes.
           $productName = $product['product_name'];
           $productPrice = $product['product_price'];
           $stock = $product['stock'];
           $discount = $product['discount'];
         
           //condition.
           if($data->product_name !=''){
              $productName = $data->product_name;
           }
           if($data->product_price !=''){
            $productPrice = $data->product_price;
           }
           if($data->stock !=''){
            $stock = $data->stock;
           }
           if($data->discount){
            $discount = $data->discount;
           }

          /* echo $productName."<br>";
           echo $productPrice."<br>";
           echo $stock."<br>";
           echo $discount;
           die(); For testing purpose.*/

          $update = "UPDATE `products` SET `product_name`='$productName', `product_price`=$productPrice, `stock`=$stock, `discount`=$discount WHERE `id`=$data->id";
          
          $res = mysqli_query($conn, $update);

           if($res) {
              echo json_encode(array('message'=>'Product Upadted', 'status'=>true));
           }else{
            echo json_encode(array('message'=>'Product Not Upadted', 'status'=>false));
           }

    }else{
        echo json_encode(array('Message'=>'Product Id is Not Given', 'status'=>false));
    }
  
?>