<!-- 

    With the help of namespace multiple class of same name can be created 
    in the same file

-->

<?php

use pro\v1\command\product;

    include 'products.php';
    include 'testing.php';

    function msg(){
        echo'Msg From INDEX File';
    }
    

    $object = new test\v2\command\product();
    echo '<br>';
    $object2 = new pro\v1\command\product();
    echo '<br>';

   pro\v1\command\msg();

   use pro\v1\command as cmd;
   $obj = new cmd\product();

?>