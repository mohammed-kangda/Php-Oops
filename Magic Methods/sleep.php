<!-- 
    
    We can't directly save the object & its value in the file,Session or 
    database.

    Firstly we have to convert it into the array using method Serialize($obj)

    We have to face the problem while converting an object into array b'coz
    Serialize() makes an array of all the properties of the objects.

    But what if we want to save selected prop only ? So to overcome this problem __sleep 
    introduce in php which helps us to convert selected properties into an array.

    __sleep method runs auto. before when we use serialize().

    Suppose we have 200 properties in object and we have to save only selected
    prop. only then __sleep method is used.

    Now we can directly save object properties into file,Session or database.

-->

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
            return array('last_name');
        }
        
    }
    
    $obj = new student();
    
    $obj->setName("MK", "Kangda");
    
    $srl = serialize($obj);
    
    echo "<pre>";
    echo $srl;
    echo "</pre>";
    
?>