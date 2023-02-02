<?php
//method overriding in PHP.
 trait hello{
    public function show(){
        echo "show: trait";
    }
 }

 class base{
    public function show(){
        echo "show: base";
    }
 }
 class child extends base{
    use hello;
    public function show(){
        echo "show: child";
    }
 }

 $child = new child();
 $child->show();


?>