<!-- 

    # ways of working with PHP and MySQL:

    MySQLi (procedural)
    MySQLi (object-oriented)
    PDO

=============================================================================================


    # Steps to connect with the db using oops:

    1.) Connection

    ->  $conn = new mysqli(SN,UN,PASS,DBN);

    2.) Run Sql Query

    -> $conn->query(Sql Query);

    3.) Close Connection

    -> $conn->close();

 ============================================================================


    # Ways To write mysqli fetch function in Oops:

    // Procedural Way :

    mysqli_fetch_assoc();
    mysqli_fetch_all();
    mysqli_fetch_row();
    mysqli_fetch_array();
    mysqli_fetch_fields();
    mysqli_affected_rows();
    

    // Oops Way:

    $result = $conn->query(Sql Query); 
    $result->fetch_assoc();
    $result->fetch_all();
    $result->fetch_row();
    $result->fetch_array();
    $result->fetch_fields();
    $conn->affected_rows();

    
    # Ways To write connection functions:

    mysqli_connect_error();
    mysqli_connect_errno();
    mysqli_error();
    mysqli_error_list();

    $conn->connect_error();
    $conn->connect_errno();
    $conn->error();
    $conn->error_list();

-->

