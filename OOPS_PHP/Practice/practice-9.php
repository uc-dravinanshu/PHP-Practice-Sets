<?php
//if we are creating two traits with same method.
trait hello{
    public function show(){
        echo "hello: show trait";
    }
}
trait hi{
    public function show(){
        echo "hi: show trait";
    }
}

class base{
    use hello, hi{
        hello::show insteadOf hi;
        hi::show  as Display;
    }
}

$base = new base();
$base->show();
$base->Display();
?>