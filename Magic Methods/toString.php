<!-- 
    We cant echo any object directly, if we try then it will show fatal
    error.

    To prevent fatal error & to show professional message toString method
    is used.

    get_class($this) -> returns the name of class.
    
-->

<?php 
    
    class Abc {

        public function __toString(){
            return "Can't print object as a string of class : " . get_class();
        }

    }

    $obj = new Abc();
    echo $obj;
    
?>