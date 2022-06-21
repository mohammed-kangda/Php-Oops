<h3>Example 1</h3>
<br>

<?php

    // Constructor :

    // It allows you to initialize objects.
    // It is the code which is executed whenever a new object 
    // is instantiated(created).

class Employee{

    // Properties :

    public $name;
    public $salary;


    // Methods :

    // Constructor without arguments :

    // function __construct(){
    //     echo "I am Constructor";
    // }

    // Constructor with arguments :

     function __construct($name,$salary){
         $this->nam = $name;    // In constructor value is accessed with the help of 'key' name:
         $this->sal = $salary;     
     }
}

// $obj1 = new Employee();
// $obj2 = new Employee();
// $obj3 = new Employee();

$obj1 = new Employee("ABC",100000);
$obj2 = new Employee("XYZ",350000);

echo "The Salary of $obj1->nam Is $obj1->sal <br>"; // In constructor value is accessed with help of 'key' name:
echo "The Salary of $obj2->nam Is $obj2->sal";

?>



<h3>Example 2</h3>
<br>

<?php 
    
    class person{
        
        // properties:

        public $name,$age;

        // methods:

        function __construct($n,$a){
           echo $this->name = $n; 
           echo $this->age = $a;
        }

        function show(){
           echo "The name is " . $this->name . " and age is " . $this->age . "<br>"; 
        }

    } 

   // creating object:

   $object1 = new person('MK',19);
   echo '<br>';
   $object1->show();
   

   $object2 = new person('Kangda',18);
   echo '<br>';
   $object2->show(); 

?>






<!-- NOTE: -->

<!-- 
1. in normal function value is accessed with the help of 'value' [key name] name.
2. in normal function if only one thing is written then it is considerd as 'value'.
3. in constructor value is accessed with the help of 'key' name: 
-->