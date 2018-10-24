<?php
    
    include "data.php";
    
    
    function displayCountyName(){
        
        $dbConn = getSQL(); 
        $sql = "SELECT * from mp_town"; 
        $statement = $dbConn->prepare($sql); 
        $statement->execute(); 
        $records = $statement->fetchAll(); 
        foreach ($records as $record) {
            if($record["population"] > 50000 && $record["population"] < 80000 ){
                echo "<br>";
                echo $record["town_name"];
                echo "<br>";
            }
            
      
          }//foreach
        
        
    }//displayContyName
    
    function sortPop(){
        $townPop = array();
        $dbConn = getSQL(); 
        $sql = "SELECT * from mp_town"; 
        $statement = $dbConn->prepare($sql); 
        $statement->execute(); 
        $records = $statement->fetchAll(); 
        foreach ($records as $record) {
            array_push($townPop, $record["population"]);
      
          }//foreach
        
        rsort($townPop);
        
        foreach($records as $record){
            for($i = 0; $i < count($townPop); $i++){
                if($record["population"] == $townPop[$i]){
                    echo "<br>".$record["town_name"]." :".$townPop[$i];
                }//if
            }//for
        }//foreach
        
    }//sortPop()
    
    function getSTown(){
        
        $dbConn = getSQL(); 
        $sql = "SELECT * from mp_county"; 
        $statement = $dbConn->prepare($sql); 
        $statement->execute(); 
        $records = $statement->fetchAll(); 
        foreach ($records as $record) {
            if($record["county_name"][0] == "S" ){
                echo "<br>";
                echo $record["county_name"];
                echo "<br>";
            }
            
      
          }//foreach
        
        
        
    }//getSTown()
    

   
    //displayCountyName();
    echo "<br>";
    // sortPop();
     echo "<br>";
     getSTown();
?>