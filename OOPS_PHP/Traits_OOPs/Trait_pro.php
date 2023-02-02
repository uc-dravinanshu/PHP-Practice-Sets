<?php
 trait hello{
    public function show(){
        echo "Hello: show trait ...<br>";
    }
 }
 trait hi{
    public function show(){
        echo "Hi: show trait.....<br>";
    }
 }

 class base{
    use hello, hi{
        hello::show insteadOf hi;
        hi::show as display;
    }
 }

 $obj = new base();
 $obj->show();
 $obj->display();

?>