<!-- 
    Magic Constants Types:

    Can Be Used Anywhere on Specific location:
    
    __LINE__         -> returns line number
    __FILE__         -> returns absolute path
    __DIR__          -> returns absolute path of the current file
    __FUNCTION__     -> returns Function name (works only inside function)
    
    Only Used In OOPs on Specific location:
    
    __CLASS__        -> returns Class Name
    __METHOD__       -> returns Method Name
    __NAMESPACE__    -> returns Namespace Name
    __TRAIT__        -> returns Trait Name
    
-->

<?php 
    
    echo 'Line Number ' . __LINE__ . '<br>';
    echo 'The Full Path of File is ' . __FILE__ . '<br>';
    echo 'The Full Path of these directory is ' . __DIR__ . '<br>';


    function msg(){
        echo 'The Function Name is : ' . __FUNCTION__ . '<br>';
    }

    msg();
    

    class Myclass{

        public function getnames(){
            echo 'The Method Name Is : ' . __METHOD__ . '<br>';
            echo 'The Namespace name is : ' . __NAMESPACE__ . '<br>';
            return 'The Class Name Is : ' . __CLASS__ . '<br>';
        }

    }

    $obj = new Myclass();
    echo $obj->getnames();
    
?>


<?php 
    
    trait Mytrait{

        public function getTrait(){
            return 'The name of trait is : ' . __TRAIT__ . '<br>';
        }

    }

    class className{

        use Mytrait;

    }

    $obj = new className();
    echo $obj->getTrait();

?>

