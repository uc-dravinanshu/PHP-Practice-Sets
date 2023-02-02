<?php
class Employee{
    //property.
    public $name, $age, $salary;
    function __construct($name, $age, $salary){
        $this->name=$name; #for initialize the value here create constructor function.
        $this->age=$age;
        $this->salary=$salary;
    }
    //methods.
    function info(){
        echo "<h3>Employee Profile</h3>";
        echo "Employee Name: ".$this->name."</br>";
        echo "Employee Age: ".$this->age."</br>";
        echo "Employee Salary: ".$this->salary."</br>";
    }
}

class Manager extends Employee{
    public $ta=1000;
    public $phone=300;
    public $totalSalary;
    function info(){
        $this->totalSalary = $this->salary+$this->ta+$this->phone;

        echo "<h3>Manager Profile</h3>";
        echo "Manager Name: ".$this->name."</br>";
        echo "Manager Age: ".$this->age."</br>";
        echo " Manager Salary: ".$this->totalSalary."</br>";
    }

}

$obj1 = new Manager("Dravinanshu Mishra", 25, 22000);
$obj1->info();

$obj2 = new Employee("Krishana Mishra",22, 15000);
$obj2->info();






?>