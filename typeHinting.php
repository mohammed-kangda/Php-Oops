<!--
     
    It means to state data types in parameter to prevent user from passing the
    arguements of diff. data types.

    It is also known as type declaration.

    Php Has 7 data types: int,float,string,bool,array,class/interface name,obj.

    Typehinting can be used without oops also.

    typeHinting prevents code from runnning

-->

<h3>Example 1</h3>
<br>

<?php 
    
    // using without oops:

    // int:

    // function sum(int $v){
    //     echo $v + 5;
    // }
    
    // sum(10); 

    // // array:

    function fruits(array $name){
        foreach($name as $value){
            echo $value . '<br>';
        }
    }

    // $test = ['mango','orange','strawberry'];
    // echo fruits($test);

    // // class:

    class hello{

        function sayhello(){
            echo "Say Hello";
        }
    
    }

    class bye{

        function sayBye(){
            echo "Say Bye";
        }

    }

    function wow(hello $c){
       $c->sayHello(); 
    }

    $obj = new hello();
    wow($obj);  // $obj->sayhello();

?>

<h3>Example 2</h3>
<br>

<!--  using oops: -->

<?php 
    
    class school{

        public function getNames(student $objects){
            echo "<ul>";
            foreach($objects->Name() as $value){
                echo '<li>'.$value.'</li>';
            }
            echo "</ul>";
        }
        
    }

    class student{

        public function Name(){
            return ["Php","Wordpress","Nodejs"];
        }

    }

    class library{
        
    }

    $sch = new school();
    $stu = new student();
    $lib = new library();

    $sch->getNames($stu);


?>


