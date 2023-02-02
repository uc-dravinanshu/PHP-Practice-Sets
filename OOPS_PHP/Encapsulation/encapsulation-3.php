<?php
class person{
    public $name;
    public $age;
    public $gender;
    public function display($name, $age, $gender){
       echo  $this->name=$name."<br>";
       echo  $this->age=$age."<br>";
       echo  $this->gender=$gender."<br>";

    }
}
$ob = new person();
 $ob->display("ashu",25,"M");

?>