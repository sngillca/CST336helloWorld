<?php

    function displayData(){
    if(isset($_POST['firstName'])){
        echo  $_POST['firstName'];
    }}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <link href="/homework/HW3/css/styles.css" rel="stylesheet" type="text/css" />
    <title>Homework 3: Forms</title>
    </head>
    
    <body>
        <div id="main">
        <form action="yourData.php" method="post">
            Enter First Name: <input type="text" name="firstName";
            <br/><br/>
            <br/>
            Select majors you might be interested in:
            <br/>
            <input type="checkbox" name="m1" value="Physics"> Physics<br>
            <input type="checkbox" name="m2" value="English"> English<br>
            <input type="checkbox" name="m3" value="Computer Science"> Computer Science<br>
            <input type="checkbox" name="m4" value="Anthropology" > Anthropology<br>
            <input type="checkbox" name="m5" value="Marine Biology"> Marine Biology<br><br/>
            Select your standing:
            <br/>
            <select name="standing">
              <option value="Freshman">Freshman</option>
              <option value="Sophomore">Sophomore</option>
              <option value="Junior">Junior</option>
              <option value="Senior">Senior</option>
            </select>
            <br/><br/>
            What do you identify as:
            <br/>
            <input type="radio" name="gender" value="male"> Male<br>
            <input type="radio" name="gender" value="female"> Female<br>
            <input type="radio" name="gender" value="other"> Other<br>  
            
            <br/>
            Enter Years of Experience in Field:
            <br/>
            <input type="number" name="exp" min="0" max="60">
            <br/>
            
            <input type="submit" value="Submit Data"/>
            
    
        </form>
        </div>
    </body>
    
</html>