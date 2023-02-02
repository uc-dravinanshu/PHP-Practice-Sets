<?php
class Company{
    public $name, $salary, $post;
    function __construct($name, $salary, $post){
        $this->name=$name;
        $this->salary=$salary;
        $this->post=$post;
    }
   function Display1(){
    echo "<h1>Company name: ".$this->name."</br></h1>";
    echo "<h1>Company Minimum Salary:  ".$this->salary."</br></h1>";
    echo "<h1>Company Post available: ".$this->post."</br></h1>";
   }
}
$com = new Company("UCertify","50K","Software Engineer");
$com->Display1();

class Employee extends Company{
    public $department;
    function __construct($n,$s,$p,$d){
          $this->name=$n;
          $this->salary=$s;
          $this->post=$p;
          $this->department=$d;
    }
    function Display(){
    echo $this->name."</br>";
    echo $this->salary."</br>";
    echo $this->post."</br>";
    echo $this->department."</br>";
    }
}
$emp = new Employee("Aman Singh",25000,"App Developer","Development");
$emp->Display();


?>