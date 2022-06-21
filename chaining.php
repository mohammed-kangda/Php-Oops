<?php 
    
    class abc{
        public function first(){
            echo "This is first function <br>";
            return $this;    // for object
        }
        public function second(){
            echo "This is second function <br>";
            return $this;
        }
        public function third(){
            echo "This is third function <br>";
        }
    }
    
    $test = new abc();
    // $test->first();
    // $test->second();
    // $test->third();

    $test->first()->second()->third();
    
?>