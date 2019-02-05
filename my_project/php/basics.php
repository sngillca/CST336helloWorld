<?php 
  
  
  function isInputCorrect($userAnswer, $expectedAnswer) {
    if ($userAnswer == $expectedAnswer) {
      echo "<h1 class='correct'>CORRECT</h1>";
      
    } else {
      echo "<h1 class='incorrect'>WRONG</h1>";
    }
  }//isInputCorrect



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PHP Basics</title>
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
        .explain{
            font-size: 1.5em;
        }
        .definebg {
            background-color:#DFD8D8;
        }
        .correct {
          color: green;
        }
        .incorrect {
          color: red;
        }
        .noinput {
          color: #E63C22;
        }
        
        .sidebar {
          margin: 0;
          padding: 0;
          width: 200px;
          background-color: #f1f1f1;
          position: fixed;
          height: 100%;
          overflow: auto;
        
        }
        
        .sidebar a {
          display: block;
          color: black;
          padding: 16px;
          text-decoration: none;
          
        }
   
        .sidebar a.active {
          background-color: #8EC0C1;
          color: white;
          
        }
        
        .sidebar a:hover:not(.active) {
          background-color: #555;
          color: white;
          
        }
        
    </style>
  </head>
  
  <body>
    
    
    
    
    <nav class="navbar navbar-expand-sm bg-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../php.php">PHP</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../jqeury.php">JavaScript/JQuery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../html.php">HTML/CSS</a>
      </li>
    </ul>
    </nav>
    
    
    
    
    <div class="sidebar">
      <a href="./intro.php">Introduction</a>
      <a class="active" href="./php/basics.php">PHP Basics</a>
      <a href="./forms.php">Forms</a>
     <a href="./sql.php">MySQL Database</a>
   </div>
      
  
  <div class="jumbotron text-center">
    <h1>PHP Basics</h1>
    <p>Here you will learn about variables, data types, <br>conditionals, and more. You will also be able to test<br> yourself in the Test Yourself section.</p> 
  </div>
    
    
    
  
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        
        <h2>Variables</h2>
        <div class="definebg">
        <!--
        <p class="explain">In PHP to declare a variable you would use the dollar sign character, followed by <br>what you would like to store in your variable.</p>
        <p class="explain">Example: let's store the word HELLO in a variable. In PHP this is considered a string<br> so we would put quotes around it.<br>Here's what it would look like: <br>$word = "HELLO";</p>
        -->
        <h4>Create a variable called word with the word PIZZA stored in it:</h4>
        <form method=post>
            <h4>Enter code:</h4><input type="text" name="code">
            <input type="submit" value="RUN">
        </form>    
        <?php 
          $answer = "$"."word = 'PIZZA';";
          $userAnswer = $_POST['code'];
      
        if(isset($userAnswer) && !(empty($userAnswer))) {
          isInputCorrect($userAnswer,$answer);
        } else {
          echo "<h3 class='noinput'>Please input code and run.</h3>";
        }
  
      ?>
  
      </div>
      </div>
      <div class="col-sm-6">
            <div class="container">
  
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Show answer</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Answer</h4>
        </div>
        <div class="modal-body">
          <p>$word = 'PIZZA';</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
    
</div>
</div>
<div class="row">
      <div class="col-sm-6">
        
       
        <div class="definebg">
        <!--
        <p class="explain">In PHP to declare a variable you would use the dollar sign character, followed by <br>what you would like to store in your variable.</p>
        <p class="explain">Example: let's store the word HELLO in a variable. In PHP this is considered a string<br> so we would put quotes around it.<br>Here's what it would look like: <br>$word = "HELLO";</p>
        -->
        <h4>Create a variable called intro with the sentence Hello World! stored in it:</h4>
        <form method=post>
            <h4>Enter code:</h4><input type="text" name="code2">
            <input type="submit" value="RUN">
        </form>    
        <?php 
          $answer = "$"."intro = 'Hello World!';";
          $userAnswer = $_POST['code2'];
      
        if(isset($userAnswer) && !(empty($userAnswer))) {
          isInputCorrect($userAnswer,$answer);
        } else {
          echo "<h3 class='noinput'>Please input code and run.</h3>";
        }
  
      ?>
  
      </div>
      </div>
      <div class="col-sm-6">
        <div class="container">
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Show answer</button>
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Answer</h4>
                </div>
                <div class="modal-body">
                  <p><?php echo "<h1>".$_POST['code2']."</h1>" ?></p>
                </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
    
</div>
</div>
</div>
    
  </body>
</html>
