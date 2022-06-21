<!-- There are three types of modifiers. Public, Private, and protected.  -->

<!-- 1. <public> is the modifier that allows the property to be accessed from anywhere. -->

<!-- 2. <private> can be accessed only within the class. -->

<!-- 3. <protected> means the property can be only accessed within the classes and derived class. -->

<h3>Example 1</h3>
<br>

<?php 
    
    class Employee{
        
      // Properties :

      private $name = "WORDPRESS";

      // Methods :

      function showName(){ 
        echo $this->name;   // in normal function if only one thing is written then it is considerd as 'value'.                           
      }

    }

    $obj = new Employee();
    // echo $obj->name;  // not accesible if property is private

    $obj->showName(); // accessible bcoz by default functions are public

     
?>


<h3>Example 2</h3>
<br>

<?php 
  
    class base{

      // properties:

      protected $name;
    
      // methods:

      public function __construct($n){
        $this->name = $n;
      }
    
      public function show(){
        echo "Your Name : " . $this->name . "<br>";
      }
        
    }
  
  class derived extends base{

    // methods:

    public function get(){
      echo "Your Name is: " . $this->name . "<br>";
    }
    
  }

  $obj1 = new base('Mohammed');
  echo $obj1->show();
  
  $obj2 = new derived('kangda');
  echo $obj2->get();
  
?>


<!-- NOTE: -->

<!-- 
1. in normal function value is accessed with the help of 'value' [key name] name.
2. in normal function if only one thing is written then it is considerd as 'value' & it must be Properties defined name.
3. in constructor value is accessed with the help of 'key' name: 
-->
