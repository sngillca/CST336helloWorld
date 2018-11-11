<?php

function getDatabaseConnection() {
    if (strpos($_SERVER['SERVER_NAME'], "c9users") !== false) {
       
        $host = "localhost";
        $username = "nat";
        $password = "cst336"; // best practice: define this in a separte file
        $dbname = "memes_v2"; 
    } else {
       
        $host = "us-cdbr-iron-east-01.cleardb.net";
        $username = "bc0ae3954df63b";
        $password = "d545dc63"; //best practice: defined in seperate file that is not commited to GitHub
        $dbname = "heroku_884ad785636f6f4"; 
    }
    
    

    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbConn; 
}

//$dbConn = getDatabaseConnection(); 
?>