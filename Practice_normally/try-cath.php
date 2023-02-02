<?php
try{
    print "Try work <br>";
    throw new Exception(); 
}catch(Exception $e){
    print "something went wrong, caugth it..!! <br>";
}finally{
    print "this part is always executed <br/>";
}
?>