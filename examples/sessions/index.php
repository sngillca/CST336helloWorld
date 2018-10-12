<?php
session_start();

$_SESSION["count"] = $_SESSION["count"] + 1;

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sessions</title>
    </head>
    <body>

 
     <?php
        session_start();
        echo "<h1>Guess the number (between 1 and 100) </h1>";
        $prevGuess = array();
        $_SESSION["count"] = $_SESSION["count"] + 1;
        if(!isset($_SESSION['randomVal'])){
            $_SESSION['randomVal'] = rand(1,100);
            
        }//if
        // echo "Random number:".$_SESSION['randomVal'];
         $right = $_SESSION['randomVal'];
         //echo "The number is:".$right;
         echo "<br/>";
         if(isset($_POST['destroy'])){
             session_destroy();
             session_start();
         }
        
         if(isset($_POST['enter'])){
             $numOfguesses +=1;
             echo "<br/>";
             echo "Number of attempts: ".$numOfguesses;
             echo "<br/>";
         if($_POST['guess'] == $_SESSION['randomVal']){
             echo "You guessed it! The number is:".$_SESSION['randomVal'];
             echo "<br/>";
             echo "You guessed: ".$_POST['guess'];
             echo "<br/>";
         } else {
             echo "You guessed WRONG! The number is:".$right;
             echo "<br/>";
             echo "You guessed: ".$_POST['guess'];             
         }}
         echo "<br/>";
        ?>
        
        <form method="post">
            <input type="text" name="guess" />
            <input type="submit" name="enter" value="Submit Guess"/>
            <input type="submit" name="destroy" value="Start over"/>
        </form>


        
    </body>
</html>