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
    $query = "SELECT * FROM `student`";
    #prepared statement. stage-1
    $result = mysqli_prepare($con, $query);

    # second: it is execute the result.
    mysqli_stmt_execute($result);

    # third: it transfer the result set from a prepared statement.
    mysqli_stmt_store_result($result);

    # fourth: it returns number of rows in statement result set.
    $total_row = mysqli_stmt_num_rows($result);

    echo $total_row;

    #free the stored result set from the memory.
    mysqli_stmt_free_result($result);

    #close the connection.
    mysqli_close($con);
   

?>