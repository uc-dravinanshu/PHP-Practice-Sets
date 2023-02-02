<?php
class person{
    public $name, $age;
    function __construct($name="No Name", $age=0){
         $this->name=$name; #for set the value.
         $this->age=$age;   #for set the value means object ka value construtor me aayega name, age.
                            #then set the value public ke name aur age me.
    }
    function Details(){
        echo "Your Name is = ".$this->name."</br>";
        echo "Your Age is = ".$this->age."</br>";
    }
}

$obj = new person("Dravinanshu Mishra",25);

$obj->Details();

$obj1 = new person();
$obj1->Details();



?>