<?php
// connect to our mysql database server

function getDatabaseConnection() {
    $host = "localhost";
    $username = "nat";
    $password = "cst336"; //best practice: defined in seperate file that is not commited to GitHub
    $dbname = "memelab"; 
    
    // Create connection
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $dbConn; 
}

    //$dbConn = getDatabaseConnection();

?>
