<?php
class school{
    public function getNames(student $name){
        foreach($name->Names() as $n){
            echo $n."<br>";
        }
    }
}

class student{
    public function Names(){
        return ["Ram","Shyam","Krishana"];
    }
}
class library{

}

$stu = new student();

$sch = new school();
$sch->getNames($stu); 


?>