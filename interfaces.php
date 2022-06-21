<!-- 
    With the help of interface a single class can inherit multiple methods
    from the multiple interface class.

    It works like abstract class.

    All methods are just declared in interface but not implemented 
    its complete coding is done in derived class.

    Properties cannot be used in interface.

    Derived class is neccessary to use interface.

    No access modifiers are used in interface.

    If diff. declaration of methods in both then it will show error
-->

<?php 

    // creating interfaces:
    interface parent1{

        // methods:
        function calc($a, $b);
        
    }

    interface parent2{

        // methods:
        function subs($c, $d);
        
    }


    // creating derived classes:
    class child implements parent1,parent2{

        public function calc($a, $b){
            echo $a + $b;
        }
    
        public function subs($c, $d){
            echo $c - $d;
        }
    }

    // creating objects:
    
    $object1 = new child();
    echo $object1->calc(15,5);

?>