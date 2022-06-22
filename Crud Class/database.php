<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP CRUD</title>
</head>
<body>
<?php 
    
    class Database{

        // Connecting MYSQL to the Database from Php Script

        private $servername = 'localhost';
        private $username = 'root';
        private $password = "";
        private $database = "newtest";

        private $mysqli = "";
        private $result = array();
        private $conn = false;

        // Function To Establish Connection
        public function __construct(){

            // if conn value is false
            if(!$this->conn){

                // Creating a connection (object)
                $this->mysqli = new mysqli($this->servername,$this->username,$this->password,$this->database);
                $this->conn = true;
                
                // storing error in an array
                if($this->mysqli->connect_error){
                    array_push($this->result,$this->mysqli->connect_error);
                    return false; // stop code from running further
                }

            }else{
                // if conn is already establish then run code ahead
                return true;
            }
            
        }



        // Function to insert into database
        public function insert($table,$params=array()){
            if($this->tableExist($table)){

                // displaying tables columns name & value in array form
                echo '<pre>';
                print_r($params);
                echo '</pre>';

                // separating keys & values from array[col. name & its value]
                $table_columns = implode(', ' , array_keys($params)); // array to string
                $table_values  = implode("', '" , $params); // array to string

                // running sql to insert values
                $sql = "INSERT INTO $table($table_columns)
                        VALUES('$table_values')";       

                // checking weather sql is running or not
                if($this->mysqli->query($sql)){
                    array_push($this->result,$this->mysqli->insert_id);
                    return true; // run code further
                }else{
                    array_push($this->result,$this->mysqli->error);
                    return false; // stop running code
                } 

            }else{
                return false;  // if table doesn't exist
            }

        }



        // Function To Update Table Values
        public function update($table,$params=array(),$where=null){
            if($this->tableExist($table)){
                echo '<pre>';
                print_r($params);
                echo '</pre>';

                $args = array();
                foreach($params as $key => $value){

                    // Name = 'Coder' Age = '19' Gender = 'Male'
                    $args[] = " $key = '$value' ";   

                }
     
                // running sql to update values
                $sql = "UPDATE $table SET " . implode(', ', $args);

                // UPDATE testtbl SET Name = 'Coder' , Age = '19' , Gender = 'Male'
                if($where != null){
                   $sql .= " WHERE $where";
                }
                
                echo $sql;

                // checking weather sql is running or not
                if($this->mysqli->query($sql)){
                    array_push($this->result,$this->mysqli->affected_rows);
                    return true;
                }else{
                    array_push($this->result,$this->mysqli->error);
                }
            }else{
                return false;
            }
        }



        // Function to delete table or row(s) from the database
        public function delete($table,$where = null){
            if($this->tableExist($table)){
               // running sql to delete values
               $sql = "DELETE FROM $table";

               // if user has set where condition then
                if($where != null){
                  echo $sql .= " WHERE $where";

                    // if delete queries runs then
                    if($this->mysqli->query($sql)){

                        // show haw many rows are deleted / affected
                        array_push($this->result,$this->mysqli->affected_rows);
                        return true;
                    }else{

                        // if delete queries doesn't runs then store error in array
                        array_push($this->result,$this->mysqli->error);
                        return false;
                    }
                }
            }
        }



        // Function to select from the database
        public function select($table,$rows="*",$join=null,$where=null,$order=null,$limit=null){
            if($this->tableExist($table)){
                // running sql to select values
                $sql = "SELECT $rows from $table";

                // concatinating  if user has set Join condition then
                if($join != null){
                    $sql .= " JOIN $join"; 
                }

                // concatinating  if user has set where condition then
                if($where != null){
                   $sql .= " WHERE $where";  
                }

                // concatinating  if user has set order by condition then
                if($order != null){
                   $sql .= " ORDER BY $order";  
                }

                // concatinating  if user has set limit condition then
                if($limit != null){
                    if(isset($_GET['page'])){
                        $page = $_GET['page']; 
                    }else{
                        $page = 1;
                    }  
                    $start = ($page-1) * $limit;  // (1 - 1) * 2 = 0 * 2 == 0
                    $sql .= " LIMIT $start,$limit";  // 0,2 --> (1,2)
                }

                // dispalying sql query
                echo $sql . '<br>';
                
                // if sql queries runs then
                if($this->mysqli->query($sql)){
                    $this->result = $this->mysqli->query($sql)->fetch_all(MYSQLI_ASSOC);
                    return true;
                }else{
                    // otherwise store error in array
                    array_push($this->result,$this->mysqli->error);
                    return false;
                }
            }else{
                return false;
            }

        }


        // Function For Pagination
        public function pagination($table,$join=null,$where=null,$limit=null){

            // before starting this method we should know total records we have 
            // and in 1p we have to show how much records

            if($this->tableExist($table)){
                if($limit != null){

                    // running sql query to check number of records
                    $sql = "SELECT COUNT(*) FROM $table";

                    // concatinating  if user has set limit & where condition then
                    if($where != null){
                        $sql = " WHERE $where";
                    }

                    if($join != null){
                        $sql .= " JOIN $join"; 
                    }
                    $query = $this->mysqli->query($sql);
                    

                    // finding total records using inbuilt function in array form
                    $total_records = $query->fetch_array();
                    $total_records = $total_records[0];

                    // getting how many page should be created
                    $total_page = ceil($total_records/$limit);
 
                    // $_SERVER['PHP_SELF'] -> check current page url
                    // basename() -> From current page url it will take away file name

                    $url = basename($_SERVER['PHP_SELF']);  // index.php

                    // getting the value of page using GET method
                    if(isset($_GET['page'])){
                        $page = $_GET['page']; 
                    }else{
                        $page = 1;
                    }  

                    // creating li for displaying page no.
                    $output = "<ul class='pagination'>";
                    
                    // show previous button only if page no is 1 or =1
                    if($page > 1){
                        $output .= "<li><a href='$url?page=".($page - 1)."'>&#10094;</a></li>";
                    }else{
                        $output .= "<li><a class='light' href=''>&#10094;</a></li>";
                    }
                    
                    // t_r = 10  >  2  -> then only show pagination
                    if($total_records > $limit){
                        for($i = 1; $i <= $total_page; $i++){

                            // add 'active' class if $i & page becomes equal
                            if($i == $page){
                                $cls = "class='active'";
                            }else{
                                $cls = "";
                            }
                            $output .= "<li><a $cls href='$url?page=$i'>$i</a></li>";

                        }
                    }
                    
                    // displaying Next btn only when total page remains greater curr. page
                    if($total_page > $page){
                        $output .= "<li><a href='$url?page=".($page + 1)."'>&#10095;</a></li>";
                    }else{
                        $output .= "<li><a class='light' href=''>&#10095;</a></li>";
                    }
                    
                    $output .= "</div>";
                    $output .= "</ul>";
                    // showing pagination
                    echo $output;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }



        // Function to run normal sql queries
        public function sql($sql){

            // if sql queries runs then
            if($this->mysqli->query($sql)){

                // fetch_all means fetch all records from the database
                // MYSQLI_ASSOC means it will return key name instead of indexNo.
                $this->result = $this->mysqli->query($sql)->fetch_all(MYSQLI_ASSOC);
                return true;

            }else{
                // if queries doesn't runs store store error in the array
                array_push($this->result,$this->mysqli->error);
                return false;
            }

        }



        // Function to check weather TableExist or not
        public function tableExist($table){
            // running sql query to check weather table exist
            $sql = "SHOW TABLES FROM $this->database LIKE '$table'";
            $tableinDb = $this->mysqli->query($sql);

            // if above queries runs and table exists then
            if($tableinDb){
                if($tableinDb->num_rows == 1){
                    return true;
                }else{
                    array_push($this->result,$table . ' doesn"t exist in the database');
                    return false;
                }
            }
        }



        // Function to show Msg result[array]
        public function getResult(){
            $val = $this->result;
            return $val;
        }



        // Function To Close Connection -> runs when all task of class is completed
        public function __destruct(){  
            // means connection is there then
            if($this->conn){  
                if($this->mysqli->close()){
                    // close connection
                    $this->conn = false;
                    return true;
                }
            }else{
                // means connection is not there then stop code from running further
                return false;
            }
        }
           
    }
    
?>
</body>
</html>






