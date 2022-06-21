<!-- 

    __isset is used to check weather the value of the property is set or not.

    When we try to check private property value is set then it will show fatal 
    error.

    This method returns 1 when value is set & return 0 when value is not set.

    __isset is used to prevent fatal error. 

    It runs when we use isset or empty method().

 -->


<h3>Example 1</h3>
<br>

<?php 
    
    // class Student{

    //     public $course;
    //     private $first_name;
    //     private $last_name;

    //     public function setName($fname,$lname){
    //        $this->first_name = $fname;
    //        $this->last_name = $lname;
    //     }

    //     public function __isset($properties){
    //         echo isset($this->$properties); // 1
    //         echo '<br>';
    //         echo $properties;   // first_name
    //     }

    // }


    // $obj = new Student();
    // $obj->setName('Mk','kangda') . '<br>';
    // isset($obj->first_name);

?>

<h3>Example 2</h3>
<br


<?php 
    
    class Personal {

        private $career;
        private $first_name;
        private $last_name;
        private $detail = ['name'=>'MK','Skill'=>'Wordpress'];

        public function setName($fname,$lname){
            $this->first_name = $fname;
            $this->last_name = $lname;
        }

        public function __isset($name){
            echo isset($this->detail[$name]);   
        }

    }

    $objects = new Personal();
    isset($objects->Skill);
    
?>






