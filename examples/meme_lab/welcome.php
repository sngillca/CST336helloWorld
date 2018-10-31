<?php
  include 'database.php';
  
  function frontPage(){
    $dbConn = getDatabaseConnection(); 
    $sql = "SELECT * FROM `all_memes` ORDER BY RAND() LIMIT 1;"; 
   // echo "SQL: $sql <br/>";
    
    $statement = $dbConn->prepare($sql);
    $result = $statement->execute(); 
    $records = $statement->fetchAll(); 
    //echo "*******<br>";
    //print_r($records);
    
    
    foreach ($records as $record) {
      $memeURL = $record['meme_url'];
      echo  '<div class="meme-div" style="background-image:url('.$memeURL.')">';
      echo '<h2 class="line1">'.$record["line1"].'</h2>'; 
      echo '<h2 class="line2">'.$record["line2"].'</h2>'; 
      echo '</div>';
      
    }//foreach
  }//frontPage()
  
  
?>
  
<!DOCTYPE html>

<html>

  <head>

    <title>Welcome</title>
    <style>
            .meme-div{

      width: 450px;

      height: 450px;

      background-size: 100%;

      text-align: center;

      position: relative;

      }
      
      .memes-container .meme-div{
        width: 150px;
        height: 150px;
        margin: 10px 20px;
        float: left;
        
        
      }
      .memes-containter .meme-div h2{
        font-size: 18px;
        
      }

      h2 {

        position: absolute;

        left: 0;

        right: 0;

        margin: 15px 0;

        padding: 0 5px;

        font-family: impact;

        color: white;

        text-shadow: 1px 1px black;
        
        

      }

      .line1 {

         top: 0;

       }

      .line2 {

         bottom: 0;

       }
    </style>

  </head>

  <body>

    <h1>Meme Generator</h1>

  <?php frontPage(); ?>
    <br><br>
    <h1>Welcome to my Meme Generator!</h1>
  
  
  

    <form method="post" action="meme.php">

        Line 1: <input type="text" name="line1"></input> <br/>

        Line 2: <input type="text" name="line2"></input> <br/>
                Meme Type:
        <select name="meme-type">
          <option value="college-grad">Happy College Grad</option>
          <option value="thinking-ape">Deep Thought Monkey</option>
          <option value="coding">Learning to Code</option>
          <option value="old-class">Old Classroom</option>
        </select>

        <input type="submit"></input>

    </form>

    <a href="./meme.php">View all memes</a>
  </body>

</html>
