<?php
abstract class Bank{
    abstract function id__proof();
}

class HDFC extends BANK{
     function id__proof(){
        echo "HDFC bank </br>";
     }
}

class ICICI extends BANK{
    function id__proof(){
       echo "ICICI Bank </br>";
    }
}

$hdfc = new HDFC();
$hdfc->id__proof();

$icici = new ICICI();
$icici->id__proof();

?>