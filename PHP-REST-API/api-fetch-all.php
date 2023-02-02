<?php
 //hedare function declare always head of the code.

 //content-type: application means it retuns json format data.
 header('Content-Type:application/json');
 
 //it returns the origin means kis kis website ko iska access de raha hu.
 header('Access-Control-Allow-Origin:*');


 require("db_config.php");
 $sql = "SELECT * FROM `student`";
 $res = mysqli_query($conn, $sql) or die("SQL Query Failed");

 if(mysqli_num_rows($res)>0) {
     //it becomes combine associative array me convert.
     $output = mysqli_fetch_all($res, MYSQLI_ASSOC);
     //converts json format me.
     echo json_encode($output);
 }else{
    //create array inside json_encode and inside make key and value associative array.
    //it converts json format.
    echo json_encode(array('message'=>'No Records Found','status'=>false));
 }

?>