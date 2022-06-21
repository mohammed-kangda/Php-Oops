<!--
  
  Destruct :

  A destructor is called when the object is 
  destructed or the script is stopped or exited. 

  It runs whenever an obkect is created

  Why Destruct ?

  if we want something to be executed when the code ends. 
  That code can be written in the __destruct function and it will be executed.
  The processes such as closing the file,
  closing the server at the end, any security loopholes, and many more.

-->

<?php

  class Employee{

    // Properties :

    public $name;
    public $salary;

    // Methods :

    // constructer :

    function __construct($name,$salary){
        $this->nam = $name;
        $this->sal = $salary;    
    }

    // destructor :

    function __destruct(){
        echo "I am Destructing {$this->nam} <br>";     
    }

  }

  $obj1 = new Employee("ABC",100);
  $obj2 = new Employee("XYZ",200);
  $obj3 = new Employee("MNO",300);

  
  echo "The Salary of $obj1->nam Is $obj1->sal <br>";
  echo "The Salary of $obj2->nam Is $obj2->sal <br>";
  echo "The Salary of $obj3->nam Is $obj3->sal <br>";
 
?>