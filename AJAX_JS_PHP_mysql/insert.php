<?php
    require("db_connection.php");

    $data = stripslashes(file_get_contents("php://input"));

    $mydata = json_decode($data,true);
    
    $id = $mydata['id'];
    $name = $mydata['name'];
    $email = $mydata['email'];
    $password = $mydata['password'];
    
    //insert.
   /* if(!empty($name) && !empty($email) && !empty($password)){
        $sql = "INSERT INTO `students` (`name`, `email`, `password`) VALUES ('$name','$email','$password')";
        if($con->query($sql) == TRUE){
            echo "students Saved Records Successfully";
        }else{
            echo "Unable to save Records";
        }
    }else{
        echo "Fill All Records";
    }*/

    //insert or Update the Data both works.
    if(!empty($name) && !empty($email) && !empty($password)){
        $sql = "INSERT INTO `students` (`id`, `name`, `email`, `password`) VALUES ('$id', '$name','$email','$password') ON DUPLICATE Key UPDATE `name`='$name', `email`='$email', `password`='$password'";
        if($con->query($sql) == TRUE){
            echo "students Saved Records Successfully";
        }else{
            echo "Unable to save Records";
        }
    }else{
        echo "Fill All Records";
    }

?>