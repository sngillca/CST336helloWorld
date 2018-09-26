<!DOCTYPE html>
<html>
 <!--Natalia Gill CST 336 9/25/18 Lab 3 -->
    <head>
        <meta charset="utf-8" />
        <title>Sailor Silverjack</title>
        <link rel="stylesheet" href="/labs/lab3/css/styles.css" type="text/css" />
     
     
    </head>
    <body>
        <div id="main">
                   
        <?php

        include 'inc/functions.php';
       $winner = array();
       $nameWinner = array();
       $char1 = ranChar4();
       $char2 = ranChar2();
       $char3 = ranChar3();
       $char4 = ranChar1();
       
        $face = 1;
        $color = rand(0,1);
         echo  '<img src="/labs/lab3/img/ws.png" alt="game" title="game" width="150px"/ >';  
        echo  '<img src="/labs/lab3/img/cres.png" alt="game" title="game" width="400px"/ >';  
        
        echo '<br/>';
        //echo "<p>RINI HAS TURNED EVIL! HELP SAILOR MOON, SAILOR PLUTO, AND SAILOR SATURN, GET HER BACK TO NORMAL! COLLECT AS MANY POINTS AS YOU CAN!</p>";
        
         echo '<br/>';
       echo  '<img src="/labs/lab3/img/'.$char1[0].'.png" alt="player Pluto" title="Player Pluto" width="150px"/>';
        echo '<br/>';
        echo $char1[1];
         
         echo '<br/>';
          $p1 = getHand();
          array_push($winner, $p1);
          array_push($nameWinner, $char1[1]);
           echo '<br/>';
        echo  '<img src="/labs/lab3/img/'.$char2[0].'.png" alt="player Moon" title="Sailor Moon" width="100px"/>';
         echo '<br/>';
         echo $char2[1];
        echo '<br/>';
        $p2 = getHand();
          array_push($winner, $p2);
          array_push($nameWinner, $char2[1]);
        echo '<br/>';
         echo  '<img src="/labs/lab3/img/'.$char3[0].'.png" alt="player Pluto" title="Sailor Pluto" width="125px"/>';
        echo '<br/>';
          echo $char3[1]; 
         echo '<br/>';
           $p3 = getHand();
          array_push($winner, $p3);
          array_push($nameWinner, $char3[1]);
         echo '<br/>';
         echo '<br/>';
        
         echo  '<img src="/labs/lab3/img/'.$char4[0].'.png" alt="player Saturn" title="Sailor Saturn" width="150px"/>';
          echo '<br/>';
          echo $char4[1];
           
         echo '<br/>';
        
          $p4 = getHand();
          array_push($winner, $p4);
          array_push($nameWinner, $char4[1]);
         echo '<br/>';
         $q = checkTotal($winner);
      
      $getChar = 0;
      for($i=0;$i<count($winner);$i++){
          if($winner[$i] == $q){
           $getChar = $i;
          }
         }
        
         
         //from http://php.net/manual/en/array.sorting.php
         function microtime_float()
         {
             list($usec, $sec) = explode(" ", microtime());
             return ((float)$usec + (float)$sec);
             
         }
         $time_start = microtime_float();
         usleep(100);
         $time_end = microtime_float();
         $time = $time_end - $time_start;
        echo "<br/>";
        echo "<br/>";
          echo "<p>ELAPSED TIME: $time seconds\n</p>";
        echo "<br/>";
         echo "<br/>";
         
        echo "The winner is ".$nameWinner[$getChar]."!";
          echo "<br/>";
        echo "Score:".$q;
          ?>
        <form>
            <input type="submit" value="PLAY AGAIN"/>
        </form>
        </div>
       <div id="footer">Natalia Gill <br/>CST 336: Internet Programming<br/> California State University, Monterey Bay <br /> Marina, California</div>
    
    </body>
</html>