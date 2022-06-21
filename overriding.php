<!-- Method & Property Overriding -->

<?php 
    
    class Main{

        // properties:

        public $name = "Parent Class";

        // methods:

        public function calc($a, $b){
            return $a * $b;
        }
        
    }
    
    class Child extends Main{

        // properties:

        public $name = "Child Class";

        // methods:

        public function calc($a, $b){  // it will override parent
            return $a + $b;
        }

    }

    $obj1 = new Child();
    echo $obj1->name;
    echo $obj1->calc(10,10);

    // Out: 20Child Class
    

?>