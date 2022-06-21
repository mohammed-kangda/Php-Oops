<!--

    __invoke method runs auto. when we try to make object a function. 


-->

<?php 
    
    class Calculation{

        public $a,$b;

        public function __construct($v1,$v2){
            $this->a = $v1;
            $this->b = $v2;
        }

        public function sum(){
            echo $this->a + $this->b;
        }

        public function __invoke(){
            echo $this->a + $this->b;  
        }        

    }
    
    
    $obj = new Calculation(10,20);
    $obj->sum();  # 30
    echo '<br>';  

    // making obj a function
    $obj();       # 30

?>