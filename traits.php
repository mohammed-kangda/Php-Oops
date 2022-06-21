<!-- 
    PHP only supports single inheritance: a child class can inherit only 
    from one single parent.

    So, what if a class needs to inherit multiple behaviors? OOP traits solve
    this problem.

    Traits are used to declare methods that can be used in multiple classes. 
    Traits can have methods and abstract methods that can be used in multiple
    classes, and the methods can have any access modifier (public, private, or 
    protected).
-->

<h3>Example 1</h3>
<br>

<?php 
    
    trait hello{

        public $msg = "I am msg <br>";

        public function sayHello(){
            echo "Hello Everyone <br>";
        }

        public function sayHi(){
            echo "Say Hi To Everyone <br>";
        }

    }
    
    trait bye{

        public function sayBye(){
            echo "By Everyone <br>";
        }

    }

    class main1{

        use hello,bye;

    }

    class main2{

        use hello;

    }

    $obj1 = new main1();

    $obj1->sayHello();
    $obj1->sayHi();
    echo $obj1->msg;

?>

<h3>Example 2</h3>
<br>

<?php 
    
    trait test{
    
        public function hello(){
            echo "Trait Class";
        }

    }
    
    class one{

        public function hello(){
            echo "Hello Everyone from one"; // 3rd priority
        }

    }

    class two extends one{

        use test;  // 2nd prority

        public function hello(){
            echo "Say Hi from two";  // 1st priority
        }

    }

    $objs = new two();
    $objs->hello();
?>

<h3>Example 3 -- Trait Methods</h3>
<br>

<?php 
    
    trait traitOne{
    
        public function sayHello(){
            echo "Hello From TraitOne Class <br>";
        }

    }

    trait traitTwo{
    
        public function sayHello(){
            echo "Hello From TraitTwo Class <br> <br>";
        }

    }
    
    class base{

        use traitOne,traitTwo{
            traitOne::sayHello insteadOf traitTwo;
            traitTwo::sayHello as newHello;
        }

    }
    
    $objs = new base();
    $objs->sayHello();
    $objs->newHello();


?>


<h3>Example 4 -- Trait Methods</h3>
<br>
<?php 
    
    trait traitFirst{
        
       private function sayHello(){
            echo "Hello From TraitFirst Class";
        }
    
    }
    
    
    class otherClass{

        use traitFirst{
            traitFirst::sayHello as public freshHello;   // making function public
        }
    
    }
    
    $objects = new otherClass();
    $objects->freshHello();
   
    
    
?>


