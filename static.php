<!-- 
    Static methods can be called directly - without creating an 
    object of the class first.

    Class will be considered as static only if all of its methods
    and properties are static.

-->

<h3>Example 1</h3>
<br>

<?php 
    
    class Base{
    
        // properties:

        public static $name = 'MK';

        // methods:

        public static function show(){
            echo self::$name; 
        }

        public function __construct($n){
          echo self::$name = $n;
        }
    }
    

    echo Base::show();  // MK
    $object1 = new Base('Kangda'); // kangda
    echo $object1->show();  // kangda

?>

<h3>Example 2</h3>
<br>

<?php 
    
    class B{

        public static $skill = 'Shopify';

    }

    class C extends B{

        public static function display(){
            echo parent::$skill; 
        }

    }

    $objs = new C();
    $objs->display();
    
?>

<h3>Example 3</h3>
<br>

<?php 
    
    class parClass{

        // properties:

        protected static $course = "Wordpress";

        // methods:

        public function visible(){
            echo static::$course; // php -> means to print prop of derived class(late static bind)
            echo self::$course;   // wordperss
        }

    }

    class chilClass extends parClass{

        // properties:

        protected static $course = "php";

    }

    $object = new chilClass();
    $object->visible();
    
?>