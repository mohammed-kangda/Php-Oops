<!-- “Inheritance is the ability to define a new class(child class) 
      that is a modified version of an existing class(parent class)” -->

<!-- Parent: The parent class is the one that is giving access to its 
             methods or properties to the child class or derived class.

     Child:  Child class is the one that is inheriting methods and properties
             from the parent class. --->

<!-- <h3>Example 1</h3>
<br>




    class Employee{

      // Properties :

       public $name = "MK";
       public $sal = 10000;
       public $grade = 3;
       private $carrer = "WORDPRESS DEVELOPER";


       // Methods :


       function setSalary($sal){
           $this->salary = $sal;
       }

       function getSalary(){
           echo "The name is $this->name and Income is $this->salary <br>";   // must be 'value'
       }

       function showName(){
           echo "The name of CEO is $this->name <br>";
       }

    }

    // Inheriting a new class Programmer from Employee

    class Programmer extends Employee{

        // Properties :

        public $language = "php";

        // Methods :

        function changeLanguage($lang){
           echo $this->language = $lang . "<br>";
           echo $this->grade;
        }
    }

    $obj1 = new Employee();
    echo $obj1->name = "Kangda<br>";
    echo $obj1->sal;  // 10000
    echo "<br>";
    $obj1->setSalary(10);  // $obj1->salary = 10
    echo $obj1->sal; // 10

    echo $obj1->salary; 
    echo "<br>";
    $obj1->showName();

    $obj2 = new Employee();
    echo $obj2->grade;
    echo "<br>";

    $obj3 = new Programmer();
    $obj3->changeLanguage("Flutter");
    echo "<br>";
    echo $obj3->language;
    echo "<br>";
    echo $obj3->language='NodeJs <br>';
    echo $obj3->name;
    echo "<br>";
    $obj3->setSalary(56);
    echo $obj3->getSalary();
    echo $obj3->showName();
    echo $obj3->sal;
     -->
  





<h3>Example 2</h3>
<br>

<?php 
    
    class Empl{

        // properties:

        public $name;
        public $age;
        public $salary;

        // methods:

        function __construct($n, $a, $s){
            $this->name = $n;
            $this->age = $a;
            $this->salary = $s;
        }

        function info(){
            echo "<h3>Employee Profile</h3>";
            echo "Employee Name : " . $this->name . "<br>";
            echo "Employee Age : " . $this->age . "<br>";
            echo "Employee Salary : " . $this->salary . "<br>";
        }

    }

    class Manager extends Empl{
       
        // properties:

        public $ta = 1000;
        public $phone = 500;
        public $totalSalary;

        function infos(){
            $this->totalSalary = $this->salary + $this->ta + $this->phone;
    
            echo "<h3>Manager Profile</h3>";
            echo "Employee Name : " . $this->name . "<br>";
            echo "Employee Age : " . $this->age . "<br>";
            echo "Employee Salary : " . $this->totalSalary . "<br>";
        }
        
    }

    $obj1 = new Empl('EName', 22, 50000);
    $obj2 = new Manager('MName', 24, 55000);

    $obj1->info();
    $obj2->infos();
    
?>

