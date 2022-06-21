<?php 
    
    include 'database.php';

    $obj = new Database();


    // $obj->insert('testtbl',['Name'=>'PDO','Age'=>'17','Gender'=>'Male']);
    // echo '<pre>';
    // echo 'Insert Id is : ';
    // print_r($obj->getResult());
    // echo '</pre>';


    // $obj->update('testtbl',['Name'=>'CHK','Age'=>18],'Name = "CHK"');
    // echo '<pre>';
    // echo 'Update Result Is : ';
    // print_r($obj->getResult());
    // echo '</pre>';


    $obj->delete('testtbl',"name='CHK' AND Age=18");
    echo '<pre>';
    echo 'Delete Result Is : ';
    print_r($obj->getResult());
    echo '</pre>';


    // $obj->sql('SELECT * FROM testtbl');
    // echo '<pre>';
    // echo 'Sql Result Is : ';
    // print_r($obj->getResult());
    // echo '</pre>';

    
    // $join = "citytb ON students.city = citytb.cid";
    // $colName = "students.id,students.student_name,citytb.cname";
    // $obj->select('students',$colName,$join,null,null,2);
    // echo '<pre>';
    // echo 'Select Result Is : ';
    // print_r($obj->getResult());
    // echo '</pre>';

    // echo $obj->pagination('students',$join,null,2);

?>

<!-- select($table,$rows="*",$join=null,$where=null,$order=null,$limit=null) -->
<!-- pagination($table,$join=null,$where=null,$limit=null) -->