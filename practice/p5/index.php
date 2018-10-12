
<?php
    
   

    session_start();
    if(isset($_POST['password'])){
        echo $_POST['password'];
        session_destroy();
    } 
    
    if(!isset($_SESSION['password'])){
            $_SESSION['password'] = $_POST['password'];
    } else {
        echo "error";
    }
    
    $pas = array();
    array_push($pas,  $_SESSION['password']);
    
    print_r($pas);
    print_r($_SESSION);
    print_r($_POST);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Practice 5</title>
    </head>
    
    <body>
     
 <form  method="post">
     <input type="text" name="password"/>
 </form>

       
    </body>
    
</html>