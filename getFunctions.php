<!-- 

    List of PHP oop get functions:


    get_class($obj) 

    get_parent_class (child ClassName)

    get_class_methods(className) -> private/protected not visible[outside class]

    get_class_vars (className)

    get_called_class() -> for which class it has called

    get_declared_classes() -> on page shows total declare classes inc. 
                              inbuilt class

    get_declared_interfaces() -> shows all available inerfaces on the page

    get_declared_traits() 

    get_object_vars(className) 

    class_alias(className,aliasname) -> not a get function but used to set 
                                        alias for className

-->

<?php 

    // get_class()

    class myClass{
        function name(){
            echo "Class Name : " . get_class($this) . "<br>";
        }
    }
    
    $obj = new myclass();
    
    $obj->name();
    
    echo "Class Name (Outside) is : " . get_class($obj) .'<br>';
    

    // get_parent_class () :
    
    class abc{
        function name(){
            echo "Parent Class name : " . get_parent_class($this) . "<br>";
        }
    }
    
    class xyz extends abc{
        
    }
    
    $obj1 = new xyz(); // child
    
    $obj1->name();
    
    echo "Parent Class name(Outside) : " . get_parent_class('xyz') . '<br>';


    // get_class_methods():

    class myClasses{

        function __construct(){
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }
        
        function myfunc1(){
            
        }
        
        private function myfunc2(){
            
        }

    }
    
    $obj3 = new myClasses();
    $class_methods = get_class_methods('myClasses');
    echo '<pre>';
    print_r($class_methods);
    echo '</pre>'; 
    echo '<br>';

    foreach($class_methods as $methods){
        echo $methods . "<br>";
    }

    // get_class_vars():

    class className{

        public $var1;
        public $var2 = "hello";
        public $var3 = 100;
        private $var4;
        
        function __construct(){
            $this->var1 = "wow";
            $this->var2 = "Yahoo";
            echo '<pre>';
            print_r(get_class_vars(__CLASS__)); // private included
            echo '</pre>';
        }
    }

    $obj4 = new className();
    $class_vars = get_class_vars(get_class($obj4));  // private not included
    echo '<pre>';
    print_r($class_vars);
    echo '</pre>';


    // get_object_vars():

    class Classes{
        public $var4;
        public $var5 = "hello";
        public $var6 = 100;
        private $var7;
        
        function __construct(){
            $this->var4 = "wow";
            $this->var5 = "Yahoo";
            echo '<pre>';
            print_r(get_object_vars($this));
            echo '</pre>';
        }
    }

    $obj5 = new Classes();
    $obj_vars = get_object_vars($obj5);
    echo '<pre>';
    print_r($obj_vars);
    echo '</pre>';

    // get_called_class():

    class parents{
        static public function test(){
            var_dump(get_called_class());
        }
    }

    class childs extends parents{

    }

    parents::test();
    echo '<br>';
    childs::test();

    //  get_declared_classes():

    echo '<pre>';
    print_r(get_declared_classes());
    echo '</pre>';

    // get_declared_interfaces():

    interface intface{
	
    }
    
    echo '<pre>';
    print_r(get_declared_interfaces());
    echo '</pre>';

    // get_declared_traits():

    trait trt{

    }

    class usTrait{
        use trt;
    }

    echo '<pre>';
    print_r(get_declared_traits());
    echo '</pre>';

    // class_alias():
    
    class alTest{

        public $skill = 'Wordpress';

    }

    $als = class_alias('alTest','alt');

    $ob = new alt();
    
    echo $ob->skill;


?>