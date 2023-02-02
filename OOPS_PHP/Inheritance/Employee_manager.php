<?php
class Employee{
    //property.
    public $name, $age, $city, $salary, $post;
    function __construct($n, $a, $c, $s, $p){
         $this->name=$n;
         $this->age=$a;
         $this->city=$c;
         $this->salary=$s;
         $this->post=$p;
    }
    function Display(){
        echo "<h2>Employee Profile</h2>";
        echo "Employee Name : ".$this->name."</br>";
        echo "Employee Age : ".$this->age."</br>";
        echo "Employee Salary : ".$this->salary."</br>";
        echo "Employee City : ".$this->city."</br>";
        echo "Employee Post : ".$this->post."</br>";
    }
    
}
class Manager extends Employee{
     //property.
     public $ta = 2000;
     public $pa = 1000;
     public $extra = 2000;
     public $salary;
     public $totalSalary;
     function Display(){
        echo "<h2>Manager Profile</h2>";
        echo "Manager Name : ".$this->name."</br>"; 
        echo "Manager Age : ".$this->age."</br>";
        echo "Manager Salary : ".$this->totalSalary = $this->ta+$this->pa+$this->extra+$this->salary."</br>";
        echo "Manager City : ".$this->city."</br>";
        echo "Manager Post : ".$this->post."</br>";
     }
}

$Emp = new Employee("Ashu Mishra",24, "Prayagraj", 22000, "Web App Developer");
$Emp->Display();

$manager = new manager("Abhinas Shrivastav",37,"Noida",47000,"Seniar Manager");
$manager->Display();

?>