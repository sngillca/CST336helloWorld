<?php      
            function checkPoints($points){
            $count = 0;
            for($i = 0; $i < count($points); $i++){
                $count += $points[$i];
            }
            return $count;
        }//checkPoints()
        
           function getHand(){
               $addValue = array();
           $count =0 ;
           $h = "hearts";
           $s = "spades";
           $c = "clubs";
           $d = "diamonds";
           $pointArray = array();
           $randomFace = array($h,$s,$c,$d);
           $hand = array();
           $assignRandomFace = rand(0,3);
           $finalHand = array();
           for($i = 0; $i<4; $i++){
               $hand[$i] = $randomFace[$assignRandomFace];
               $assignRandomFace= rand(0,3);
           }
           for($i = 0; $i<count($hand); $i++){
               array_unique($hand);
           }
           
           for($i = 0; $i<4; $i++){
               $faceVal = rand(1,13);
               echo '<img src="/labs/lab3/'.$hand[$i].'/'.$faceVal.'.png" alt="cards" title="cards" width="70px"/>';
               $pointArray[$i] = $faceVal;
               
           } 
          $count = checkPoints($pointArray);
          if($count-5 < 30){
              for($i = 0; $i<4; $i++){
               $hand[$i] = $randomFace[$assignRandomFace];
               $assignRandomFace= rand(0,3);
           }
           for($i = 0; $i<count($hand); $i++){
               array_unique($hand);
           }
           for($i = 0; $i<4; $i++){
               $faceVal = rand(1,5);
               echo '<img src="/labs/lab3/'.$hand[$i].'/'.$faceVal.'.png" alt="cards" title="cards" width="70px"/>';
               $addValue[$i] = $faceVal;
               
           }     
           for($i =0; $i < count($addValue); $i++){
               $count += $addValue[$i];
           }
           
          } 
          echo "<p>  TOTAL POINTS:   $count</p>";
           
           return $count;
              
       }//getHand
       
      function ranChar1(){
                $chars = array("neptune","uranus","chibi","mercury");
                $charName = array("Sailor Neptune", "Sailor Uranus","Wicked Lady","Sailor Mercury");
                $pickRandom = rand(0,2);
                $ret = array($chars[$pickRandom],$charName[$pickRandom]);
                return $ret;
            }//ranChar1
      function ranChar2(){
                $chars = array("sailor","tux","pluto","jupiter","venus");
                $charName = array("Sailor Moon", "Tuxedo Mask","Sailor Pluto","Sailor Jupiter","Sailor Venus");
                $pickRandom = rand(0,4);
                $ret = array($chars[$pickRandom],$charName[$pickRandom]);
                return $ret;
            }//ranChar2
            
        
      function ranChar3(){
                $chars = array("mars","starF","starM","starH");
                $charName = array("Sailor Mars", "Sailor Star Fighter","Sailor Star Maker","Sailor Star Healer");
                $pickRandom = rand(0,3);
                $ret = array($chars[$pickRandom],$charName[$pickRandom]);
                return $ret;
            }//ranChar2
      function ranChar4(){
                $chars = array("galaxia","luna","artemis");
                $charName = array("Sailor Galaxia", "Luna","Artemis");
                $pickRandom = rand(0,2);
                $ret = array($chars[$pickRandom],$charName[$pickRandom]);
                return $ret;
            }//ranChar2
    function checkTotal($playerPoints){
     
        $checkDiff = 42;
        $nums = array();
        $count = 0;
        for($i = 0; $i < count($playerPoints); $i++){
            if($playerPoints[$i] <= 42){
            array_push($nums, $checkDiff-$playerPoints[$i]);
            } else {
                array_push($nums, $checkDiff-$playerPoints[$i]);
            }
        }
        
        
        
            if($nums[0] < $nums[1] && $nums[0] < $nums[2] && $nums[0] < $nums[3] && $nums[0] >=0){
            //return $playerPoints[0];
        } 

        
        if($nums[1] < $nums[0] && $nums[1] < $nums[2] && $nums[1] < $nums[3] && $nums[1] >=0 ){
            //return $playerPoints[1];
         }
            if($nums[2] < $nums[1] && $nums[2] < $nums[0] && $nums[2] < $nums[3] && $nums[2] >=0 ){
            //return $playerPoints[2];
        } 

              
            if($nums[3] < $nums[1] && $nums[3] < $nums[2] && $nums[3] < $nums[0] && $nums[3] >=0 ){
            
            //return $playerPoints[3];
        } 

                 

        
    }
        
?>