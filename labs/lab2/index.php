<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
        <style type="text/css">
            @import url("css/styles.css");
        </style>
    </head>
    <body>
    
        <div id="main">
        <?php
        
        include 'inc/functions.php';
  
       
        for($i=1; $i<4; $i++){
            ${"radnomVal".$i} = rand(0,2);
            displaySymb(${"radnomVal".$i});
        }displayPoints($randomVal,$val1, $val2);
        
        ?>
        
        <form>
            <input type="submit" name="Spin!"/>
        </form>
    </div>
    </body>
</html>