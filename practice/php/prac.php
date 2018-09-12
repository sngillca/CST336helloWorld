<!DOCTYPE html>
<html>
    <?php
       
        for($i = 0; $i <9; $i++){
             $nums = rand(0,30);
            if( $nums % 2 ==0 ){
                
                echo "<tr>The number is ".$nums."</tr><br />";
                echo "<tr> it is even <tr><br />";
                 
            } else {
                 
                echo "<tr> The number is ".$nums."</tr><br />" ;
                echo "<tr>it isuneven </tr><br />";
                 
            }
        }

    ?>
        
</html>