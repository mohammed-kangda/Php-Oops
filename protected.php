<?php


    class Employee{

        public $name;
        public $salary;

        public function __construct($name,$salary){
           $this->name = $name;
           $this->salary = $salary;
           $this->describe();    
        }


       // Protected is accessible in inheritance But Private is not accessible in inheritance

        protected function describe(){
            echo "<br>";
            echo "Name Of The Programmer : $this->name <br>";
            echo "Salary Of The Programmer : $this->salary <br>";
        }

    }

    class Programmer extends Employee{
          
        public $lang = "php";

        public function __construct($name,$lang,$salary){
            $this->name = $name;
            $this->language = $lang;
            $this->salary = $salary;
            $this->describe();
        }

    }


    
    $obj1 = new Employee('Abc',100);

    $obj2 = new Programmer('Xyz','js',1000);
    

   
    
?>