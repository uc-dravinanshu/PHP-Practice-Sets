<?php
require("products.php");
require("testing.php");


function wow(){
    echo "wow from index file.<br/>";
}

$obj = new test\product();
echo "<br><br>";
$obj1 = new pro\product();

pro\wow();

?>