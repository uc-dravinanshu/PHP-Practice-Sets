<?php
class class1{
    function __construct(){
        echo "constructor called </br>";
    }
    function show(){
        echo "hello world </br>";
    }
    function __destruct(){
        echo "destruct called </br>";
    }
}
$obj = new class1();
$obj->show();

?>