<!-- 
    
    __wakeup method is the opposite of __sleep method.

    Serialize() -> convert object prop. into array.

    Unserialize() -> removes prop. from the array.[converts prop. into objects]

    __sleep runs when we Serialize() the object.

    __wakeup runs when we Unserialize() the object.

    __wakeup is mostly to connect with database

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
    
        public function __sleep(){
            return array('first_name', 'last_name');
        }

        public function __wakeup(){
            echo "This is WakeUp Method.";
        }
        
    }
    
    $obj = new student();
    
    $obj->setName("Mk", "Kangda");
    
    $srl = serialize($obj);

    echo '<pre>';
    echo $srl;
    echo '</pre>';
    
    $un = unserialize($srl);

    echo '<pre>';
    print_r($un);
    echo '</pre>';
?>