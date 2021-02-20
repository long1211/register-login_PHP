<?php 

    // Enable us to use Headers
    ob_start();

    // Set sessions
    if(!isset($_SESSION)) {
        session_start();
    }

    $hostname = "localhost";
    $username = "phpDB"; 
    $password = "1234567890";
    $dbname = "auth";
    
    $connection = mysqli_connect($hostname, $username, $password, $dbname) or die("Database connection not established.")

?>