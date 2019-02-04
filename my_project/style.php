<?php 
    //echo "Enter code to print the string hello world! to the screen.";
    //echo "The output should look as the one below. <br>";
    //echo "<strong>hello world!</strong><br>";
    $answer = "echo 'hello world!';";
    $studentAnswer = ($_POST['code']);
    if(isset($_POST['code'])) {
        if($answer == $studentAnswer) {
        echo "You got the answer right!<br>Your answer was ";
        echo $studentAnswer;
        } else {
            echo "Try again! <br>";
            echo "Your answer <strong>".$studentAnswer."</strong> is incorrect.";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
      <title>Art decode</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
      <style type="text/css">
          a{
              color:black;
          }
      </style>
    </head>
    <body>
        
        <div class="jumbotron text-center">
            <h1>Art Decode</h1>
            <p>Practice your coding skills and perfect your art</p> 
        </div>
     
            
        
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p>Write codee in PHP that has the following output</p>
                    <p>OUTPUT: <strong>Hello World!</strong></p>
                   <form method="post">
                   Enter code:<input type="text" name="code">
                    <input type="submit">

                </div>
            </div>
            
        </div>
    </body>

</html>