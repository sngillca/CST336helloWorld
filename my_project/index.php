<?php 
    echo "Enter code to print the string hello world! to the screen.";
    echo "The output should look as the one below. <br>";
    echo "<strong>hello world!</strong><br>";
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
<html>
    <head>
        <title>Auto Grade</title>
    </head>
    <body>
        <form method="post">
        Enter code:<input type="text" name="code">
        <input type="submit">
    </body>
</html>