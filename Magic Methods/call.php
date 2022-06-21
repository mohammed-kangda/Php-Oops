<!-- 

    __call method automatically calls when we use private or non existing
    method.

    __call method runs automatically. when we try to access private method.

    It makes an array of an ($args). -> arguements

    Using __call method it is possible to set or access private method.

    method_exists(object,method name) is used to check weather a method exist in class or not.

    call_user_func_array(methodName,param_arr) -> jaaha se call kiya jata he waha pe  
    return krdeta he uski actual value ko [setName function jaha se call hua 
    he us place per use pahochana he -> call_user_func_array()]

-->

<h3>Example 1</h3>
<br>

<?php 
    
    class Abc{

        private $name;
        private $career;

        private function show($nam,$carr){
           $this->name = $nam;
           $this->career = $carr;
        }

        public function __call($method,$args){
            echo "This is non existing or private method: ($method)<br>";
            echo "<pre>";
            print_r($args); // it creates an array
            echo "</pre>";
        }

    }

    $obj = new Abc();
    $obj->show('Mohammed','Wordpress');
    
?>

<h3>Example 2</h3>
<br>

<?php 
    
    class Student{

        private $first_name;
        private $last_name;

        private function setName($fname,$lname){
            $this->first_name = $fname;
            $this->last_name = $lname;
        }

        public function __call($mName, $arguments){

            // checking weather method call by user exist in class or not
            if(method_exists($this,$mName)){
                call_user_func_array([$this,$mName],$arguments);
            }else{
                echo "Method does not exist : $mName";
            }

        }
    }

    $object = new Student();
    $object->setName('Kangda','Mohammed');

    echo "<pre>";
    print_r($object);
    echo "</pre>";
?>