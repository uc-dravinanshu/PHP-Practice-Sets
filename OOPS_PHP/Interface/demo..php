<?php
    interface class1{
        public function test1();
    }

    interface class2{
        public function test2();
    }

   class class3 implements class1,class2{
    public function test1(){
        echo "class3 <br>";
      }
      public function test2(){
        echo "class3 <br>";
      }
   }

   $ob = new class3();
   $ob->test1();
   $ob->test2();
   
?>