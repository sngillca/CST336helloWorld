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
        
        <div>
            Count: <?php echo $_SESSION["count"]; ?>
        </div>
        <form>
    Name: <input type="text" id="fullName" size="25" />   <br />
    Feedback:    <textarea id="feedback" cols="30" rows="3"></textarea><br/><br />
    State: <br>
    <select id="state">
      <option value="AZ">Arizona</option>
      <option value="CA">California</option>
      <option value="IL">Illinois</option>
  </select>    <br /><br />
    Highest Degree Obtained:    <br>
    <input type="radio"  id="item1"  name="degreeChoices"  value="High School" >
         <label for="item1">High School Diploma</label> <br>
    <input type="radio"  id="item2"  name="degreeChoices" value="College">
          <label for="item2">College</label> <br><br>
    Sports I like: <br>
    <input type="checkbox" id="basket"  name="sports" value="basket">
            <label for="basket"> Basketball </label> <br>
     <input type="checkbox" id="soccer" name="sports" value="basket">
            <label for="soccer"> Soccer </label>
    <br/><br/>
    <input type="button" value="Submit Data" onclick="displayData()"/>
  </form>
 
     <?php
        $num = rand(3);
     ?>

        
    </body>
</html>