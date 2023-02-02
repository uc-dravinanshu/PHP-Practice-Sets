<?php
trait hello{
    public function sayHello(){
        echo "Welcome Sir/ma'am...How are You? <br>";
    }
    public function sayHi(){
        echo "HI...<br>";
    }
}
trait Bye{
    public function sayBye(){
        echo "Bye Bye.....!!<br>";
    }
}

class base{
    use hello, Bye;
}

class base2{
    use hello;
}

$obj = new base();
$obj->sayHello();
$obj->sayBye();
$obj->sayHI();

echo "<br><br>";
$obj2 = new base2();
$obj2->sayHello();




?>