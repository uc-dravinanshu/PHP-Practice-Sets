<?php
  class base{
    //property.
    private $name;
    //constrictor function.
    public function __construct($n){
          $this->name=$n;
    }
     //method.
    public function show(){
          echo "Your name: ".$this->name."</br>";
    }
  }

  $test = new base("Ashu Mishra"); #object create.

  //$test->name="Dravinanshu Mishra"; #assign a value.

  $test->show();  #method call. 

  class derived extends base{
    public function get(){
        echo "Your name: ".$this->name."</br>";
  }
  }
  //$test = new derived("Dravi-Ashu Mishra"); #create an object.

  //$test->get();  #method call.


?>