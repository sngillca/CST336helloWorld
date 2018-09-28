<!DOCTYPE html>
<html>
    <?php
        $points = array(23,40,34,45);
        $checkDiff = 42;
        $theDiff = array();
        
        function checkTotal($playerPoints){
            $checkDiff = 42;
            $nums = array();
            $count = 0;
            /*
            for($i = 0; $i < count($playerPoints); $i++){
            if($playerPoints[$i] <= 42){
                array_push($nums, $checkDiff-$playerPoints[$i]);
            } else {
                array_push($nums, $checkDiff-$playerPoints[$i]);
             }
         }//for
         */
      
   
            if($nums[0] < $nums[1] && $nums[0] < $nums[2] && $nums[0] < $nums[3] && $nums[0] >=0 && $count < 4 ){
            
            return $playerPoints[0];
        } 

        
            if($nums[1] < $nums[0] && $nums[1] < $nums[2] && $nums[1] < $nums[3] && $nums[1] >=0 ){
            
           return $playerPoints[1];
        
}
              
            if($nums[2] < $nums[1] && $nums[2] < $nums[0] && $nums[2] < $nums[3] && $nums[2] >=0 ){
            
            return $playerPoints[2];
        } 

              
            if($nums[3] < $nums[1] && $nums[3] < $nums[2] && $nums[3] < $nums[0] && $nums[3] >=0 ){
            
            return $playerPoints[3];
        } 

        
            
    }//function
    $q = checkTotal($points);
   echo $q;
        
    ?>
</html>