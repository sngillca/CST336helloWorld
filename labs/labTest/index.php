<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Sailor Silverjack</title>
    </head>
    <body>
        
     
        <?php
            
            //make 4 of this --> use chars index for image
            function ranChar1(){
                $chars = array("neptune","uranus","chibi");
                $charName = array("Sailor Neptune", "Sailor Uranus","Wicked Lady");
                $pickRandom = rand(0,2);
                $ret = array($chars[$pickRandom],$charName[$pickRandom]);
                return $ret;
            }
            
            $al = ranChar1();
            
            echo '<img src="/labs/labTest/img/'.$al[0].'.png"/>';
            echo "<br/>";
            echo "this is: ".$al[1];
         ?> 
                
     
  
    </body>
</html>