<?php
  final class  Parentclass{
    public function show(){
        echo "Parent class";
    }
    public function disp(){
        echo "Dravianshu Mishra<br/>";
    }
   }

   class child extends Parentclass{
    function show(){
        echo "child class <br>";
    }
   }

?>