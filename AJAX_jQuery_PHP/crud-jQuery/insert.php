<?php
 require_once("db_connection.php");

 $data = stripslashes(file_get_contents("php://input"));
 $mydata = json_decode($data, true); //it converts PHP associative array.
 
 $id = $mydata['id'];
 $name = $mydata['name'];
 $email = $mydata['email'];
 $password = $mydata['password'];


    //insert data.
 /*   if(!empty($name) && !empty($email) && !empty($password)){
    //fire the query.
        $sql = "INSERT INTO `student` (`name`, `email`, `password`) VALUES ('$name','$email','$password')";
        if($conn->query($sql) == TRUE){
            echo "Student saved successfully";
        }else{
            echo "unable to save student";
        }
    }else{
        echo "fiil_all_fields";
    } */

    //insert and update the data.
    if(!empty($name) && !empty($email) && !empty($password)){
        //fire the query.
            $sql = "INSERT INTO `student` (`id`,`name`, `email`, `password`) VALUES ('$id','$name','$email','$password') ON DUPLICATE KEY UPDATE name='$name', email='$email', password='$password'";
            if($conn->query($sql) == TRUE){
                echo "Student saved successfully";
            }else{
                echo "unable to save student";
            }
        }else{
            echo "fiil_all_fields";
        }

?>