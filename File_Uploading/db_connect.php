<?php
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DB","phpbootstrap");

$con = mysqli_connect(HOST,USER,PASS,DB);

if(!$con){
    die("Not Connected");
}

?>