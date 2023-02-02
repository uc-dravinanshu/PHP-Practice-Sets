<?php
 //hedare function declare always head of the code.

 //content-type: application means it retuns json format data.
 header('Content-Type:application/json');
 
 //it returns the origin means kis kis website ko iska access de raha hu.
 header('Access-Control-Allow-Origin:*');

  //read json format data.
  //this function return json string format data into php associative array (last me true likhane).
  //API return json formate data and accept json format data.
  
  $data = json_decode(file_get_contents("php://input"),true);

  //php://input ==> this method read any type of data chahe wah jaha se aa rahaho iphone,android desktop etc.
  //read any type of data json, XML, raw data etc.

  $search_value = $data['search']; //key yaani term provide kare.

 require("db_config.php");
 $sql = "SELECT * FROM `student` WHERE `name` LIKE '%{$search_value}%'";
 $res = mysqli_query($conn, $sql) or die("SQL Query Failed");

 if(mysqli_num_rows($res)>0) {
     //it becomes combine associative array me convert.
     $output = mysqli_fetch_all($res, MYSQLI_ASSOC);
     //converts json format me.
     echo json_encode($output);
 }else{
    //create array inside json_encode and inside make key and value associative array.
    //it converts json format.
    echo json_encode(array('message'=>'No Search Found','status'=>false));
 }

?>