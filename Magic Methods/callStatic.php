<!-- 

    Whenever we try to access private static methods,this method calls 
    automatically & display professional msg.
    
    Using this method user can easily access staic methods.

    __class__ -> returns the name of the class

-->

<h3>Example 1</h3>
<br>

<?php 
    
    class Student{

        private static function hello(){
            echo "This is static hello function";
        }

        public static function __callStatic($mName, $arguments){
            echo "Non Existing or private method: $mName";
        } 
             
    }
    
    Student::hello();
    
?>

<h3>Example 2</h3>
<br>

<?php 
    
    class Personal {

        private static function msg($msg){
            echo "Hello $msg";
        }

        public static function __callStatic($method, $argument){
            if(method_exists(__class__ , $method)){
                call_user_func_array([__class__,$method],$argument);

            }else{
                echo "Method does not exist : $method";
            }
        }
    }

    Personal::msgs('This is msg');
    
?>