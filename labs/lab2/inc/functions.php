  <?php
  function displaySymb($val){
        /*
            if($val == 0){
            echo '<img src="img/seven.png" alt="seven" title="Seven" width="70"/>';
        } else if ($val == 1) {
            echo '<img src="img/cherry.png" alt="cherr" title="Cherry" width="70"/>';
        } else {
            echo '<img src="img/lemon.png" alt="lemon" title="Lemon" width="70"/>';
        }//else
        */
        switch($val){
            case 0: $symbol = "seven";
            $post = "reel3";
                    
            break;
            case 1: $symbol = "cherry";
            $post = "reel2";
            break;
            case 2: $symbol = "lemon";
            $post = "reel1";
            break;
        }//switch
        
        echo "<img id=$post src='img/$symbol.png' alt='$symbol' title='$symbol' width='70px'/>";
        }//function
        
        
        function displayPoints($val1, $val2, $val3){
            echo "<div id='output'>";
            if($val1 == $val2 && $val2 == $val3){
                switch($val1){
                    case 0: $totalPoints = 1000;
                    echo "<h1>Jackpot!</h1>";
                    break;
                    case 1: $totalPoints = 500;
                    break;
                    case 2: $totalPoints = 250;
                    break;
                    
                }//switch
                echo "<h2>You won $totalPoints points!</h2>";
            } else {
                echo "<h3> Try Again!</h3>";
            }//else 
            echo "</div>";
        }//function
    
       
?>