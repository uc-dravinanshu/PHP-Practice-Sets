<?php
$hname = "localhost";
$uname = "root";
$pass = "";
$db = "test";

$con = mysqli_connect($hname, $uname, $pass, $db);
if(!$con){
   die("cannot connect to Database".mysqli_connect_error());
}

echo "connected successful <hr></br>";
#first prepare the statement. 
    $query = "SELECT * FROM `student` WHERE `id`=?";
    #prepared statement. stage-1
    $result = mysqli_prepare($con, $query);

    #bind the parameter.
    #which id.
    mysqli_stmt_bind_param($result, 'i',$id);
    $id=1;

    #for bind result set in variable. stage-2
    mysqli_stmt_bind_result($result, $id, $name, $roll, $address);

    #for execute prepared statement. stage-2
    mysqli_stmt_execute($result);
    
    #for fetch all table data pre row data.
   mysqli_stmt_fetch($result);
    echo "ID: ".$id." Name: ".$name." roll: ".$roll." address: ".$address."</br><br>";
   
   #how to close the prepared statement.
   mysqli_stmt_close($result);


   #how to connection close.
   mysqli_close($con);
   

 

?>