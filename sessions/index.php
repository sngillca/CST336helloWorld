<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Session</title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="passLen"/>
        </form>
        
       
    </body>
</html>

<?php

    if(isset($_POST['passLen'])){
        echo "<br/>SET: ".$_POST['passLen'];
    } else {
        echo "ERROR <br/>";
    }
    
   session_start();
    echo "<h3> PHP List All Session Variables</h3>";
    foreach ($_SESSION as $key=>$val)
    echo $key." ".$val."<br/>";
?>