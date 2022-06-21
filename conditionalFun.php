<!--
    
    List Of Conditional Functions:

    class_exists()
    interface_exists()
    method_exists($objvar,method_name)
    trait_exists(trait_name)
    property_exists(class_name,prop_name)
    is_a($objvar,class_name) -> to check weather the object is of part. class
    is_subclass_of($test,parentClassName) -> check objects is an inherit of parent class

    It will give output as true or false only

-->

<?php 

    // class_exists() :

    class Myclass{

        public $name;

    }

    if(class_exists('Myclass')){
        echo 'Class Exist <br>';
        $obj = new MyClass();
    }else{
        echo 'Class Not Exist';
    }
    

    // interface_exists():

    interface MyInterface{
	
        public function calc($a, $b);

    }

    
    if(interface_exists('MyInterface')){
        echo "This interface is exist <br>";

        class MyClasses implements MyInterface{

            public function calc($a, $b){
                echo $a + $b;
            }

        }	
    }else{
        echo "This interface is not exist.";
    }


    // method_exists() :

    class Some{
        public function MyMethod(){
            echo 'I am Method';
        }
    }
    
    $obj = new Some();

    if(method_exists($obj,'MyMethod')){
        echo "This method is exist <br>";
            
    }else{
        echo "This method is not exist <br>";
    }

    // trait_exists():

    trait Mytrait{

        public function traits(){
            return __TRAIT__;
        }

    }

    if(trait_exists('MyTrait')){
        //echo "This trait is exist <br>";
        class ClassName{
            use MyTrait;
        }

        $objs = new ClassName();
        echo $objs->traits();

    }else{
        echo "This trait is not exist <br>";
    }
    

    // property_exists()

    class Exam{

        public $skill;

    }

    if(property_exists('Exam','skill')){
        echo "This property is exist <br>";
    }else{
        echo "This property is not exist <br>";
    }

    // is_a():

    class Content{
         
    }

    $objects = new Content();

    if(is_a($objects,'Content')){
        echo "This Object is of Class Content.<br>";
    }else{
        echo "This Object is not of Class Content.<br>";
    }

    // is_subclass_of():

    class parentClasss{
       public $fname = 'Mohammed';
    }
    
    class childClass extends parentClasss{
        private $lastName;
    }

    $test = new childClass();

    if(is_subclass_of($test, 'parentClasss')){
        echo "This \$obj is a object of subclass of parentClass.";
    }else{
        echo "This \$obj is not a object of subclass of parentClass.";
    }
?>