<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
       
        <title>Sailor Moon Silver Jack</title>
        <style type="text/css">
            body{
                background-color: #FA74DF;
            }
        </style>
         <link href="/labs/lab3/css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        
        <div>
            
            
            <?php
            
            //IMAGE
            //background-image: url("/labs/lab3/img/stars.png");
            /*
            $p1 = 0;
            $p2 = 1;
            $p3 = 2;
            $p1Points = 0;
            $p2Points = 0;
            $p3Points = 0;
            */
            $color = black;
            $dims;
            $hearts;
            $clubs;
            $spades;
            $face = 1;
            
           // $face = rand(1,13);
            $color = rand(0,1);
        
            echo '<img src="/labs/lab3/hearts/'.$face.'.png" width="70px"/>';
             echo  '<img src="/labs/lab3/img/cres.png" alt="player Pluto" title="Player Pluto" width="400px"/>';    
             echo '<br/>';
            echo  '<img src="/labs/lab3/img/pluto.png" alt="player Pluto" title="Player Pluto" width="100px"/>';
            
            if($face == 1 && $color == black){
                
                echo '<img src="/labs/lab3/hearts/1.png" width="70px"/>';
                echo '<img src="/labs/lab3/hearts/1.png" width="70px"/>';
                echo '<img src="/labs/lab3/hearts/1.png" width="70px"/>';
                echo '<img src="/labs/lab3/hearts/1.png" width="70px"/>';
               
            } //if
             echo '<br />';
                echo  '<img src="/labs/lab3/img/saturn.png" alt="player Pluto" title="Player Pluto" width="100px"/>';
               
                 echo '<img src="/labs/lab3/hearts/1.png" width="70px"/>';
                echo '<img src="/labs/lab3/hearts/1.png" width="70px"/>';
                echo '<img src="/labs/lab3/hearts/1.png" width="70px"/>';
                echo '<img src="/labs/lab3/hearts/1.png" width="70px"/>';
                echo '<img src="/labs/lab3/hearts/1.png" width="70px"/>';
        
            ?>
                
     
        </div>
    </body>
</html>