<!-- 
    If we try to access private properties outside class then it shows 
    fatal error so to prevent fatal error & to see proffesional msg in 
    this type of situation __get method is used.

    In simple words,__get means to get property.
    
    One arguement->$property is compulsory
 -->


<h3>Example 1</h3>
<br>

<?php 
    
    class Xyz{

        private $name = 'Mohammed';

        public function __get($property){
            echo "You are trying to access non existing or private property($property)";
        }

    }
    
    $object = new Xyz();
    $object->name;
?>

<h3>Example 2</h3>
<br>

<?php 
    
    class Arr{

        private $data = ['name'=>'Mohammed','course'=>'Wordpress Developer'];

        public function __get($key){
            if(array_key_exists($key,$this->data)){
                return $this->data[$key];
            }else{
                echo 'The key ' .($key). ' is not found';
            }
            // echo "You are trying to access non existing or private property($key)";
        }

    }

    $test = new Arr();
    print_r($test->course);
    
?>