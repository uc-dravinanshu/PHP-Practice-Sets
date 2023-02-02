<?php
 trait  hello{
    private function show(){
        echo "private: show method";
    }
 }

 class base{
    use hello{
        hello::show as public Display;
    }
 }

 $base = new base();
 $base->Display();
?>