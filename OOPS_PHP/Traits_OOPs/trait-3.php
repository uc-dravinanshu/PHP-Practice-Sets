<?php
trait t1{
    public function show(){
        echo "hello";
    }
}
 #we cannot create an object of trait.
$obj = new t1();
$obj->show();
?>