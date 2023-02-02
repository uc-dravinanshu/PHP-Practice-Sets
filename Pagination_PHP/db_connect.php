<?php
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DB","test");

$con = mysqli_connect(HOST,USER,PASS,DB);
if(!$con){
    die("Connection Not Established");
}
//echo "ha yr";
?>