<?php
abstract class class1{
   abstract function test();
}
//$obj = new class1();
//$obj->test();

class class2 extends class1{
     function test(){
        echo "test";
     }
}

?>