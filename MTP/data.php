<?php

//PUSH TO GITHUB
/*
    1. git add.
    2. git commit -m "reason"
    3.git push origin master
*/

//connect to our mysql database server

    function getSQL(){
        $host = "localhost";
        $username = "nat";
        $password = "cst336"; //best practice: defined in seperate file that is not commited to GitHub
        $dbname = "midterm"; 
        
        
       // Create connection
        $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $dbConn; 
    
    }


?>