<?php
trait hello{
    public function sayHello(){
        echo "hello Trait <br>";
    }
}

class base{
    function sayHello(){
     echo "Hello Base <br>";
    }
}

class child extends base{
     use hello;
     function sayHello(){
        echo "hello child <br>";
     }
}

$obj = new child();
$obj->sayHello();

?>