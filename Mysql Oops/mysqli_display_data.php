<?php 
    
    // #1 connecting database :

    $servername = 'localhost';
    $username = 'root';
    $password = "";
    $database = "test";

    $conn = new mysqli($servername,$username,$password,$database); // object

    // Die if connection was not successful

    if($conn->connect_error){
        die("Sorry We Failed To Connect".$conn->connect_error);
    }
    
    
    // #2 SQL display query :

    $sql = "SELECT * FROM `testtbl`";
    $result = $conn->query($sql);

    // displaying number of records:

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo $row['id'] . ' Hello ' . $row['Name'] .' '.$row['Age'] .' '.$row['Gender'];
            echo '<br>';
        }
    }else{
        echo "No Result Found";
    }


    // #3 Closing Connection

    $conn->close();

?>