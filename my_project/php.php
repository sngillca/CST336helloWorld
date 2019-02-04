<?php

  //test case variable with correct answer
  $correctAnswer = "echo 'hello world!;'";
  
  //check isset user input

  function checkAnswer($userAnswer, $actualAnswer) {
    if($userAnswer == $actualAnswer) {
      echo "<br><h1>CORRECT</h1>";
    } else {
      echo "<br><h1>WRONG</h1>";
      echo "<br><h5>The correct answer was:<strong> ".$actualAnswer." </strong></h5>";
    }
    
  }


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <style>
          a{
            color: black;
          }
         
        </style>
    </head>
    
    <body>
        <div class="jumbotron text-center">
            <h1>PHP: Hypertext Preprocessor</h1>
        </div>
        
        
        <!--SECTIONS -->
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
              <h3><a href="./php/intro.php" target="_blank">Introduction</a></h3>
              <p>What is PHP and where it is used</p>
              <p>Where to download and install</p>
              <p>Other resources</p>
            </div>
            <div class="col-sm-3">
              <h3><a href="./php/basics.php" target="_blank">Basics</a></h3>
              <p>Syntax</p>
              <p>Variables</p>
              <p>Conditionals</p>
              <p>And more</p>
            </div>
            <div class="col-sm-3">
              <h3><a href="./php/forms.php" target="_blank">Forms</a></h3>
              <p>Form Handling</p>
              <p>Form Validation</p>
            
            </div>
            <div class="col-sm-3">
              <h3><a href="./php/sql.php" target="_blank">MySQL Database</a></h3>
              <p>Database</p>
              <p>Connect</p>
              <p>Create</p>
            </div>
       
        
        
        
          </div>
        </div>
        
    </body>
</html>