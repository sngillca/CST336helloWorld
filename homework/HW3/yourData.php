
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <link href="/homework/HW3/css/styles.css" rel="stylesheet" type="text/css" />
    <title>Your Data</title>
    </head>
    <body>
        
        <div id="main">
            <?php
                if(isset($_POST['firstName'])){
        echo 'First Name: '.$_POST['firstName'].'<br/>';
    } 
    

    
    
    echo '<br/>';
    echo 'Selected majors: <br/>';
    if(isset($_POST['m1'])){
        echo $_POST['m1'];
    }
    if(isset($_POST['m2'])){
        echo ' '.$_POST['m2'];
    }if(isset($_POST['m3'])){
        echo ' /'.$_POST['m3'];
    }
    if(isset($_POST['m4'])){
        echo ' /'.$_POST['m4'].'<br/>';
    }
    if(isset($_POST['m5'])){
        echo ' /'.$_POST['m5'].'<br/><br/>';
    }
    echo '<br/>';
    if(isset($_POST['standing'])){
        echo 'Standing: '.$_POST['standing'].'<br/>';
    } else {
        echo 'You did not enter your standing.<br/>';
    }
    echo '<br/>';
    if(isset($_POST['exp'])){
        echo 'Years of Experience: '.$_POST['exp'].'<br/>';
    } else {
        echo 'You did not enter years of experience.<br/>';
    }
            
    
            ?>
            
            
        </div>
        
        
        
    </body>
    
</html>