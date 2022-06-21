<!-- Example 1 -->
<h3>Example 1</h3>
<br>
<?php

    // An object is simply a collection of data and methods.

    // Class is a template that has methods and properties.

    // In class, methods are a class function, and a single class can have many methods.

    // Properties are the variables inside the class. 

class Player{

    // Properties(variable):

    public $name;
    public $speed = 5;
    public $running = false;

    // Methods(functions):

    function set_name($name){       // in normal function value is accessed 
        $this->names = $name;       // with the help of 'value' name.
    }

    function get_name(){           // in normal function if only one thing is 
        return $this->names;       // written then it is considerd as 'value'.
    }

    function run(){
        $this->running = true;
    }

    function stopRun(){
        $this->running = false;
    }
     
    // $this object k liye kaha ja raha he (Eg:Player1)
    
    // At this position, we are all set with our class. 
}



// Now will be focusing on Object which will help us to
// use the properties and methods of the class Player.

// We can access every item in the Player class using these objects.

// -> : objects ke methods ko access krne k liye arrow use hota he


$player1 = new Player();               // way to create a object

$player1->set_name('Mohammed');        // $this->names = $name == $player1->names = 'Mohammed';
echo $player1->names;
echo "<br>";
echo $player1->get_name();             // return $player1->names;
echo "<br>";
echo $player1->speed;
echo "<br>";



$player2 = new Player();

$player2->set_name('Web Developer');  // $this->names = $name == $player2->names = 'Web Developer';
echo $player2->get_name();           // return $player2->names;
echo "<br>";



$player3 = new Player();

$player3->set_name('Wordpress');      // $this->names = $name == $player3->names = 'Wordpress';
echo $player3->get_name();            // return $player3->names;
echo "<br>";
?>



<h3>Example2</h3>
<br>

<!-- Example 2 -->

<?php 
    
    
    class calculator{

        // Properties(variable):

        public $a,$b,$c;

        // Methods(functions):

        function sum(){
            $this->c = $this->a + $this->b;
            return $this->c;
        }

        function mult(){
            $this->c = $this->a * $this->b;
            return $this->c;
        }

    }

    // creating objects:

    $obj1 = new calculator();
    $obj1->a = 2;
    $obj1->b = 3;
    echo "Sum Of Obj1 is ". $obj1->sum() . "<br>";
    

    $obj2 = new calculator();
    $obj2->a = 10;
    $obj2->b = 50;
    echo "Mult Of Obj2 is ". $obj2->mult() . "<br>";

    echo "Mult Of Obj1 is ". $obj1->mult() . "<br>";
?>














<!-- NOTE: -->

<!-- 
 1. in normal function value is accessed with the help of 'value' [key name] name. 
 2. in normal function if only one thing is written then it is considerd & must be as 'value'.
 3. in constructor value is accessed with the help of 'key' name: 
-->