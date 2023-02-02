<?php
class student{
    public $name, $course, $city;
    function __construct($name="No Name", $course, $city){
          $this->name=$name;
          $this->course=$course;
          $this->city=$city;
    }
    function stuDetails(){
        echo "<table border='2' cellpadding='10' cellspacing='0' bgcolor='silver' align='center'>";
        echo "<tr><th>Name</th><th>Course</th><th>City</th></tr>";
        echo "<tr>";
        echo "<td>".$this->name."</td>";
        echo "<td>".$this->course."</td>";;
        echo "<td>".$this->city."</td>";;
        echo "</tr>";
        echo "</table>";

        }
}
$obj1 = new student("Dravianshu Mishra","MCA",24);

$obj1->stuDetails();

$obj2 = new student("Ashu Mishra","BCA",22);
$obj2->stuDetails();


?>