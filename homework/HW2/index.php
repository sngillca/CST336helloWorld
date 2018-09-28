<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>HW2</title>
        <link href="/homework/HW2/css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <div id="main">
        
        <?php
            
            //use of rand() 
            
            $pickSzn = rand(0,3);
            
            //at least one array
            $szn = array("WINTER COLLECTION","SPRING COLLECTION","SUMMER COLLECTION","FALL COLLECTION");
            echo "<p> M O D U S </p>";
            echo $szn[$pickSzn];
            
            echo "<br/>";
            
            //array for seasonal styles
            $sumCol = array();
            $springCol = array();
            $winterCol = array();
            $fallCol = array();
            
           
           
            $pickRandCol = rand(0,2);
            for($i = 0; $i < 3 ; $i++){
                //array function
                //several random images to pick from
                array_push($sumCol,'<div id="fash"> <img src="/homework/HW2/img/sum'.$i.'.png" width="500px" height="500px" /></div>' );
                array_push($springCol,'<div id="fash"> <img src="/homework/HW2/img/spring'.$i.'.png" width="300px" height="500px" /></div>' );
                array_push($winterCol,'<div id="fash"> <img src="/homework/HW2/img/winter'.$i.'.png" width="300px" height="500px" /></div>' );
                array_push($fallCol,'<div id="fash"> <img src="/homework/HW2/img/fall'.$i.'.png" width="300px" height="500px" /></div>' );
                
            }
            
            if($pickSzn == 0){
            
               echo $winterCol[$pickRandCol];
           }
            if($pickSzn == 1){
               echo $springCol[$pickRandCol];
           }
           
           if($pickSzn == 2){
               echo $sumCol[$pickRandCol];
           }
           
            if($pickSzn == 3){
               echo $fallCol[$pickRandCol];
           }
           
           
            
          // echo '<div id="fash"> <img src="/homework/HW2/img/fash'.$pickSzn.'.png" width="500px" height="500px" /></div>';
            $designer = array("Serenity", "Vie", "Faux Pas");
            sort($designer);
            echo "Designers: ";
         for($i = 0; $i <3; $i++){
             if($i < 2){
             echo $designer[$i]."/ ";
             } else {
                 echo $designer[$i]." ";
             }
         }
        ?>
        
        <form>
            <input class="button" type="submit" value="CLICK FOR NEXT" />
        </form>
   
    </div>
    
</html>