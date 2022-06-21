<!-- Displaying Data In Tabular -->

<?php 
    
    include 'database.php';

    $obj = new Database();
    
    $join = "citytb ON students.city = citytb.cid";
    $colName = "students.id,students.student_name,citytb.cname";

    $obj->select('students',"*",$join,null,null,2);
    $result = $obj->getResult(); // multidim ass. array

    echo "<table border='1' width='350px'>
              <tr>
                <td>Id</td>
                <td>Student Name</td>
                <td>Age</td>
                <td>City</td>
              </tr>   
          ";

    foreach ($result as list("id"=>$id,"student_name"=>$name,"age"=>$age,"cname"=>$city)) {
        echo "
           <tr>
              <td>$id</td>
              <td>$name</td>
              <td>$age</td>
              <td>$city</td>
           </tr>    
        ";
    }
    echo '</table>';
    $obj->pagination('students',$join,null,2);
    
?>



<!-- list() -> prevents us to use nested loop in printing multidim Arrays:

    $arr = [
              [2,3],
              [4,5] 
           ];

// multidim ass. array

    $arr = [
              [
                "id"=>1,                   // 2
                "Student_name"=>'Abc'      // 3
              ],

              [
                "id"=>2,                   // 4
                "Student_name"=>'Xyz'      // 5
              ]
           ];       
    foreach($arr as list($a,$b)){
        echo $a . $b . '<br>';      // 2,4 == $a    &   3,5  == $b  
    };       
-->