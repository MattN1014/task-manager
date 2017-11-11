<?php 
    define("DSN", "mysql:host=localhost;dbname=taskmanager");
    define("USER", "matt");
    define("PWD", "password");
    
    $options = array(PDO::ATTR_PERSISTENT => true);
    
    try {
        //Create the connection
        $conn = new PDO(DSN, USER, PWD, $options);
        
        //Set the PDO error mode
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        
        //Display successfull connection message (only while in producion)
        echo"Connection successful";
    } 
    catch (Exception $ex) {
        //Display errror message
        echo "Connection failed ".$ex->getMessage();
    }