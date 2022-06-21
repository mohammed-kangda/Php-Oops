<!-- 
    It is used to organize code in better way.

    It prevent us from writing require as and when.

    If we have many class in 1 file then __autoload helps to differentiate 
    classes and put them in on file.

    class name & file name must be same.

    It runs auto. whenever an object is created 

    jis class ka hamne object baanay hota he uski class __autoload ke parameter
    me pass ho jate he
 -->

<?php 

    // require '../__autoload/first.php';
    // require '../__autoload/second.php';

    function __autoload($class){
        require "../__autoload/" . $class . ".php";
    }
    
    $obj = new second();
    $obj2 = new first();
    
?>