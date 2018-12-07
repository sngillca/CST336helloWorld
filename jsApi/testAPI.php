<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>The Marauder's Map</title>
          <meta charset="utf=8">
        <meta name="viewport" content="width=device-width, initial-scale=1" >
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <style type="text/css">
          h1{
                text-align: center;
                font-size: 4em;
                font-family: "Courier New", Courier, monospace;
            }
            body{
                background-color:#332239;
                font-family: "Courier New", Courier, monospace;
            }
               .cont {
                background-color: white;
                 font-family: "Courier New", Courier, monospace;
            }
          </style>
    </head>
    
    <?php include 'menu.php';?>
    <body>
        <div class="cont"> <h1>I solemnly swear that I am up to no good</h1></div>
        <form>
            <div class="col-sm-4"><h4><kbd>Search by first name:</kbd></h4> <input type="text" id="name"/></div>
           <div class="col-sm-4"><h4><kbd>Search by last name:</kbd></h4> <input type="text" id="lastName"/></div>
           <div class="col-sm-4"><h4><kbd>Search by House:</kbd></h4>
           <select id="house" class="form-control">
              <option value="0">Select House</option>
              <option value="1">Gryffindor</option>
              <option value="2">Hufflepuff</option>
              <option value="3">Ravenclaw</option>
              <option value="4">Slytherin</option>
            </select>
            </div>
            <br>
            <input  class="btn btn-default btn-lg" type="button" value="Homenum Revelio" onClick="search()"/>
        </form>
        <br>
        <div id="myDIV">
            
        </div>
        <script type="text/javascript" src="/jsApi/mainAPI.js"></script>
    </body>
    <!--
    <!DOCTYPE html>
<html lang="en">
    <head>
        <title>The Marauder's Map</title>
        <meta charset="utf=8">
        <meta name="viewport" content="width=device-width, initial-scale=1" >
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style type="text/css">
            h1{
                text-align: center;
                font-size: 4em;
                font-family: "Courier New", Courier, monospace;
            }
            body{
                background-color:#332239;
            }
            
            .cont {
                background-color: white;
            }
            .mySlides {display:none;}
        </style>
    </head>
    <body>
 
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="/jsTut/home.php">The Marauder's Map <small>For Muggles & Pure-Bloods</small></a>
            </div>
            <ul class="nav navbar-nav">
              <li><a href="/jsTut/testDB.php">Use Map</a></li>
              <li><a href="/jsTut/pat.php">Find Your Patronus</a></li>
              <li><a href="/jsTut/hos.php">Find Your House</a></li>
              <li><a href="/jsTut/login.php">Login</a></li>
            </ul>
          </div>
        </nav>
       <div class="container-fluid">
        <div class="cont">
        <h1 class="p-3 mb-2 bg-dark text-white">The Marauder's Map <small><h2>For Muggles & Pure-Bloods</h2></small></h1></div>
        <br><br>
        <div class="p-3 mb-2 bg-dark text-white">
        <h3><em><kbd>Search for a Witch or Wizard</kbd></em></h3>
        <form>
            <div class="row">
            <div class="col-sm-3"><h4><kbd>Search by first name:</kbd></h4> <input type="text" id="name"/></div>
            
            <div class="col-sm-3"><h4><kbd>Search by last name:</kbd></h4> <input type="text" id="lastName"/></div>
            
            <div class="col-sm-3"><h4><kbd>Search by Patronus:</kbd></h4> <input type="text" id="patronus"/></div>
            
            <div class="col-sm-3"><h4><kbd>Search by House:</kbd></h4>
            <select id="house" class="form-control">
              <option value="0">Select House</option>
              <option value="1">Gryffindor</option>
              <option value="2">Hufflepuff</option>
              <option value="3">Ravenclaw</option>
              <option value="4">Slytherin</option>
            </select>
            </div>
            </div>
            <br>
            <input class="btn btn-default btn-lg" type="button" value="Homenum Revelio" onClick="search()"/>
        </form>
        
        <br>
         <div  id="myDIV">
            
        </div>
        <table>
        
            <tbody id="data">
                
            </tbody>
        </table>
    </div>
    </div>
        <script type="text/javascript" src="/jsTut/main.js"></script>
    </body>
</html>
    
    
    
    -->
    
    
    
</html>