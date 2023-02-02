<?php
trait Hello{
    public function sayHi(){
        echo "Hi, EveryOne...<br/>";
    }
}
trait Bye{
    public function sayBye(){
        echo "Bye, EveryOne...<br/>";
    }
}

class base{
    use Hello,Bye;
}
 
class base2{
    use Hello,Bye;
}

$base = new base();
$base->sayHi();
$base->sayBye();

$base2 = new base2();
$base2->sayHi();
$base2->sayBye();
?>