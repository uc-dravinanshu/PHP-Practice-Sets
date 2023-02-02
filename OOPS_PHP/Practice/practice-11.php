<?php
class school{
    public function getName(student $names){
        foreach($names->Names() as $n){
            echo $n."<br>";
        }
    }
}

class student{
    public function Names(){
        return ["Ram","Ashu","Karan-Arjun"];
    }
}
$stu = new student();

$sch = new school();
$sch->getName($stu);





?>