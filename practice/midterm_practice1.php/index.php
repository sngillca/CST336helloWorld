<?php
  //QUESTIONS FOR LUIS
  //why does && select != 0 not work
  //1. Why isnt my !isset (not isset) conditional working
  //2.how do i do the calendar images
  //3.how do i randomize the images
  //4.how would i place them in alphabetical order in reverse
   function selectMonth(){
       
       
      if(!isset($_POST['months'])){
        echo "<br>Please Select Month.";
        }//else if
        
        
 
    
       if(isset($_POST['months'])){
           $input = $_POST['months'];
           $month;
           if($input == "0"){
               echo "<br>Please select a Month.";
               
           }//if 1
           if($input == "1"){
               $month = "Month: November";
               
           }//if 1
           
           if($input == "2"){
               $month = "Month: December";
               
           }//if 2
           
           if($input == "3"){
                $month = "Month: January";
           }//if 3
          
           if($input == "4"){
               $month = "Month: Feburay";
               
           }//if 4
        echo $month;
        
    } //if
    
  
   
    
    
    
    }//function selectMonth()
    
    
    function checkTrips(){
        if(!isset($_POST['days'])){
            echo "<br>Please select number of trips.";
        }
    }//checkTrips()
    
    function getTrips(){
        
        $numTrips;
        
        if(isset($_POST['days'])){
            $input = $_POST['days'];
            if($input == "3" ){
                $numTrips = 3;
                return 3;
            }
            if($input == "4" ){
                $numTrips = 4;
                return 4;
            }
            if($input == "5" ){
                $numTrips = 5;
                return 5;
            }
   
       } 
    }//getTrips()
    
    
    function getLocation(){
        if(isset($_POST['locs'])){
            $input =  $_POST['locs'];
            if($input == "0"){
                echo "<br>Please select a Location.";
            }
        }
    }//getLocation()
    
    function pickedLoc(){
        $con;
        if(isset($_POST['locs'])){
            $input =  $_POST['locs'];
            if($input == "1"){
                $con = "USA";
            }
            if($input == "2"){
                $con = "Mexico";
            }
            if($input == "3"){
                $con = "France";
            }
        }//if
        
        return $con;
    }//pickedLoc()

    function cal(){
        print_r($_POST);
        if(isset($_POST['months']) && isset($_POST['days']) && isset($_POST['locs']) && $_POST['months'] != "0" ){
        $numTrips = getTrips();
        //for loop to determine how many elements
        $pickNum = array(rand(0,30),rand(0,30),rand(0,30));
        //array of random nums (3,4,5)
        //if i == $pickNum -in_array
        echo "<table>";
        for($i = 0; $i <30; $i++){
            
            if($i % 7 == 0 ){
                echo "<tr>";
               
            }//if
            //echo "<td>";
            // randImg();
            //echo ($i+1)."</td>";
            
            echo "<td>";
            if(in_array($i, $pickNum)){
                echo randImg()."<br>";
            }
            echo ($i+1)."</td>";
        }//for
        
        
        echo "</table>";
        
        }//if
    }//cal()
    
    function randImg(){
        //getTrips
        $franceLocs = array("img/France/bordeaux.png","img/France/le_havre.png","img/France/lyon.png","img/France/montpellier.png","img/France/paris.png");
         return '<img src="'.$franceLocs[rand(0,4)].'"/>';
       
       
    }

   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="/practice/midterm_practice1.php/mid.css" rel="stylesheet" type="text/css" />
        <title>Vacation Dates</title>
        
    <style type="text/css">
        .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: rgba(213, 238, 254, 1);
   color: black;
    font-size: 150%;
   text-align: center;
}
    </style>
   </head>
    <body>
        
        <div class="content">
       
       
        <h1>Winter Vacation Planner</h1>
        <div id="inner">
        <form method="post" >
            
            Select Month
            <select name="months">
                <option value="0">Select</option>
                <option value="1">November</option>
                <option value="2">December</option>
                <option value="3">January</option>
                <option value="4">Feburar</option>
            </select>
            <br><br>
            
            Number of Locations:
            <input type="radio" name="days" value="3" id="3">
            <label for="3">Three</label>
            <input type="radio" name="days" value="4" id="4">
            <label for="4">Four</label>
            <input type="radio" name="days" value="5" id="5">
            <label for="5">Five</label>
            <br><br>
            
            Select Country:
            <select name="locs">
                <option value="1">USA</option>
                <option value="2">Mexico</option>
                <option value="3">France</option>
               
            </select>
            <br><br>
            
            Visit locations in alphabetical order:
            <input type="radio" name="order" value="1" id="1">
            <label for="1">A-Z</label>
            
            <input type="radio" name="order" value="2">
            <label for="2">Z-A</label>
            
            <br><br>
            <input type="submit" value="Create Itinerary">
            
        </form>
      <?php selectMonth(); checkTrips(); getLocation(); ?>
        </div> <!-- inner -->
        <?php echo selectMonth(); echo "<br>Number of Trips: ".getTrips(); echo "<br>Location: ".pickedLoc(); cal();?>
     </div><!-- content -->
  
      
        

      
      
   
     </body>
</html>