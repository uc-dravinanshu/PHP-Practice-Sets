<?php
 require("product.php");
 require("testing.php");

 

 $obj = new pro\vi\commnad\product();
 $obj1 = new test\product();

 function wow(){
    echo "wow from Index class<br>";
}

use pro\vi\commnad as cmd;

cmd\wow();
?>