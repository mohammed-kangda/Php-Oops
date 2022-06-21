<!-- 

    In simple words , set means to set property name.

    If we try to set private property then it will show fatal error, so to 
    prevent it fatal error & visible proffesional msg __set method is used.
    
    Two Arguement -> $name & $value are compulsory
    
-->

 
<h3>Example 1 -- trying to set private property</h3>
<br>

<?php 
    
    class Abx{

        private $career;

        public function __get($property){
            echo "You are trying to access non existing or private property($property)<br>";
        }

        public function __set($property, $value){
            echo "This is non existing or private property so you cant set it:$property -- $value<br>";
        }
        
    }
    
    $obj = new Abx();
    $obj->career;  // getting private property
    $obj->career = "Wordpress"; // setting private property

?>

<h3>Example 2 -- Setting private property</h3>
<br>

<?php 
    
    class Abc{

        private $name;

        public function show(){
            echo $this->name;
        }

        public function __get($property){
            echo "You are trying to get non existing or private property($property)";
        }

        public function __set($property, $value){
            if(property_exists($this,$property)){
               return $this->$property = $value;
            }else{
               echo "Property ($property) Does not Exist";
            }
        }

    }

    $object = new Abc();
    $object->name = 'Set'; // setting private property
    // $object->name; // getting private property
    $object->show();
    
?>
