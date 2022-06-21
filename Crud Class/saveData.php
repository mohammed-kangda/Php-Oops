<?php 
    
    include 'database.php';
    $obj = new Database();
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // storing in variable

        $name = $_POST['name'];
        $age = $_POST['age'];
        $city = $_POST['city'];

        $value = ['student_name'=>$name,'age'=>$age,'city'=>$city];

        if($obj->insert('students',$value)){
            echo "<h2>Data Successfully inserted</h2>";
        }else{
            echo "<h2>Data Failed To Insert</h2>";
        }
    }
    
?>