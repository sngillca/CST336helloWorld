 <?php
   $randomValue1  = rand(0,2);
        $randomValue2 = rand(0,2);
        $randomValue3 = rand(0,2);
        
        function displaySymbol($randomValue, $pos){
            
            switch($randomValue){
                case 0: $symbol = "seven";
                       
                        break;
                case 1: $symbol = "cherry";
               
                        break;
                case 2: $symbol = "lemon";
            
                        break;
            }
            echo "<img id='reel$pos'  src='img/$symbol.png' alt='$symbol' title='$symbol' width='70'>";
            
        }//displaySymbol()
     
     
       
        
        
        
        "<div id='output'>";
        function displayWin($a,$b,$c){
        
            
        if($a == 0 && $b == 0 && $c  == 0){
            echo "<h1>JACKPOT all sevens</h1>";
            $totalPoints = 1000;
        }//if
        if($a == 1 && $b == 1 && $c  == 1){
            echo "<h1>JACKPOT all cherry</h1>";
            $totalPoints = 500;
        }//if
        if($a == 2 && $b ==2 && $c  == 2){
            echo "<h1>JACKPOT all lemon</h1>";
            $totalPoints = 500;
        }//if
         if($a !=  $b || $c  != $b){
            echo "<h1>try again</h1>";
        }//if
        
        if($totalPoints > 0){
            echo "<h1>You won $totalPoints points!</h1>";
        }
            
        }//function
        
        "</div>";
            
            "<div id='output'>";
                 echo "hello world ";
                 
                 "</div>";
        
        displaySymbol($randomValue1,1);
        displaySymbol($randomValue2,2);
        displaySymbol($randomValue3,3);
        displayWin($randomValue1,$randomValue2,$randomValue3);
        
    ?>