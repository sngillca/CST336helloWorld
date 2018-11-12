<?php
session_start(); 
include 'functions.php';

checkLoggedIn(); 

?>

<!DOCTYPE html>
<html>
  <head>
    <title>A Meme</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <?php include 'navigation.php' ?>
    
    <h1>All memes</h1>
    <form method="post" action="memes.php">
        Search:  <input type="text" name="search"></input> 
        Meme type: <select name="meme-type">
          <option value=""></option>
          <option value="college-grad">Happy College Grad</option>
          <option value="thinking-ape">Deep Thought Monkey</option>
          <option value="coding">Learning to Code</option>
          <option value="old-class">Old Classroom</option>
        </select> <br/>
        ORDER: 
        <input type="radio"  name="order" value="newest-first"> Newest first
        <input type="radio"  name="order" value="oldest-first"> Oldest first
        <br/>
        
        <input type="radio" name="delete" value="del"> Delete Meme<br> 
        <input type="submit"></input>
        <br><br>
        <h4>Edit Meme</h4>
        <form method="post">
        Line 1: <input type="text" name="line1"></input> <br/>
        Line 2: <input type="text" name="line2"></input> <br/>
        Meme Type:
        <select name="meme-type">
          <option value="college-grad">Happy College Grad</option>
          <option value="thinking-ape">Deep Thought Monkey</option>
          <option value="coding">Learning to Code</option>
          <option value="old-class">Old Classroom</option>
           
        </select>

        <input value="Edit Meme" type="submit"></input>
    </form>
    
    </form>
    <div class="memes-container">
      <?php 
        $memes = searchForMemes(); 
        displayMemes($memes); 
        
        if (isset($_POST['line1'])){
           editMeme($id, $line1, $line2, $memeType);
           
        }
      ?>
      <div style="clear:both"></div>
    </div>
    
  </body>
</html>