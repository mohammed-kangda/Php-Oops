<!--
    
    To Prevent Some Class From being Used & to prevent them from 
    creating their Objects Abstract Class Is Used.

    Just Declare But Not Complete the methods or properties.

    Its complete code is done in derived class.

    In an abstract class minimum 1 must be an abstract method.
 
    In both main & derived class method which is abstract should be 
    declared in same way

-->

<?php 
    
    abstract class parentClass{
	
        public $name;
    
        abstract protected function calc($a, $b);
            
    }

    class childClass extends parentClass{
	
        public function	calc($c, $d){
            echo $c + $d;
            // echo "Hello";
        }
              
    }

    $test = new childClass();
    $test->calc(10, 20); // 30
    
?>
 