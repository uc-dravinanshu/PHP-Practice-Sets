<?php
 define("HOST","localhost");
 define("USER","root");
 define("PASS","");
 define("DB","crud");

 $conn = mysqli_connect(HOST,USER,PASS,DB);

 if(!$conn){
    die("Not Connected");
 }


 ############### image path. ####################
 define('UPLOAD_IMAGE_PATH',$_SERVER['DOCUMENT_ROOT'].'/CRUD/uploads/');
 define('Upload','uploads/');


 ################ define Image for display the image@#####
  //define("FETCH_SRC","https://127.0.0.1/CRUD/uploads/");
  define('image','uploads');
?>