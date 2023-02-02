<?php
class Hello{
   public function SayHello(){
        echo "hello EveryOne..<br>";
    }
}
class Bye{
    public function SayBye(){
        echo "Bye EveryOne...<br>";
    }
}

function wow(Hello $c){
    $c->SayHello();
}

$obj = new Hello();
wow($obj);
?>