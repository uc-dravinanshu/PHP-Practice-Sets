<?php
    require("db_connection.php");
    $data = stripslashes(file_get_contents("php://input"));

    $mydata = json_decode($data,true);

    $id = $mydata['sid'];


    if(!empty($id)){
        $sql ="DELETE FROM `students` WHERE `id`= {$id}";
        if($con->query($sql) == true){
            echo "student Record Deleted Successfully";
        }else{
            echo "Unable to Delete";
        }
    }else{
        echo "Id is emply not deleted";
    }

?>