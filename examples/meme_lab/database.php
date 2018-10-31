<?php
// connect to our mysql database server

function getDatabaseConnection() {
    
    
    //mysql://bc0ae3954df63b:d545dc63@us-cdbr-iron-east-01.cleardb.net/heroku_884ad785636f6f4?reconnect=true
    
    
    if($_SERVER['SERVER_NAME'] == "cst336-natgill.c9users.io") { //running on c9
    
        $host = "localhost";
        $username = "nat";
        $password = "cst336"; //best practice: defined in seperate file that is not commited to GitHub
        $dbname = "memelab"; 
    } else {
        //running on Heroku
        
        $host = "us-cdbr-iron-east-01.cleardb.net";
        $username = "bc0ae3954df63b";
        $password = "d545dc63"; //best practice: defined in seperate file that is not commited to GitHub
        $dbname = "heroku_884ad785636f6f4"; 
    }
    // Create connection
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $dbConn; 
}

    //$dbConn = getDatabaseConnection();

?>
