<?php 
    
    include 'database.php';
    $obj = new Database();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="saveData.php" method="post">
        <label for="">Name:</label><br>
        <input type="text" name="name" id=""><br><br>

        <label for="">Age:</label><br>
        <input type="number" name="age" id=""><br><br>
 
        <label for="">City:</label>
        <select name="city" id="">
           <?php 
               
               $obj->select('citytb');

               // storing data of the tbl in $result
               $result = $obj->getResult();
               
               foreach ($result as list('cid'=>$cid,'cname'=>$cname)) {
                   echo "<option value='$cid'>$cname</option>";
               }
               
           ?>
        </select><br><br><br>
        <input type="submit" value="Save">
    </form>
</body>
</html>