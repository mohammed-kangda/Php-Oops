<!-- 
    __unset is use to destroy the  variable.

    It runs when we use unset().

    This method prevents fatal error.
-->

<h3>Example 1</h3>
<br>

<?php 
    
    class student{
	
        public $course = "PHP";
        private $first_name;
        private $last_name;
    
        public function setName($fname, $lname){
            $this->first_name = $fname;
            $this->last_name = $lname;
        }
    
        public function __unset($property){
            echo $property . " is unset";
            unset($this->$property);
        }

    }

    $obj = new student();
    $obj->setName('Mohammed','Kangda');
    
    unset($obj->first_name);
    echo '<pre>';
    print_r($obj);
    echo '</pre>';
    // unset($obj->course); 
    // echo $obj->course;  // Undefined property
    
?>