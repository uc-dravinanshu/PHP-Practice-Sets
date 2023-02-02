<?php
function division($n){
    try{
        if($n<=0){
          throw new Exception("</br>enter the valid number");
        }
         $div =2/$n;
          echo "</br>".$div; 
     }catch(Exception $e){
           echo $e->getMessage();
           #echo $e->getLine();
           #echo $e->getCode();
           #echo $e->getFile();
     }finally{
        echo "</br>finally";
     }
}
division(2);
division(0);
division(4);
division(7);
?>