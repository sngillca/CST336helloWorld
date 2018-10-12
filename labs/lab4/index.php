<!DOCTYPE html>
<html>
    <head>
        <title>Image Carousel</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" >
        <style>
            @import url("css/styles.css");
            body {
                background-image: url('<?=$backgroundImage ?>');
            }
        </style>
    </head>
    <body>
        <br/><br/>
        <?php
            if(!isset($imageURLs)){
                echo "<h2>Type keyword for slideshow <br/> from Pixabay.com  </h2>";
            } else {
                
            }
        
        ?>
        <!-- HTML FORM -->
        <form>
            <input type="text" name="keyword" placeholder="Keyword/>
            <input type="submit" value="Submit"/>
        </form>
        <br/><br/>
        
        <?php
            $backgroundImage = "img/sea.jpg";
            if (isset($_GET['keyword'])){
                echo "You searched for: ".$_GET['keyword'];
                
            }
            if (isset($_GET['keyword'])){
                include 'api/pixabayAPI.php';
                $imageURLs = getImageURLs($_GET['keyword']);
                print_r($imageURLs);
            }
        ?>
        <script src="https://ajax.googleapis.com/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
          
    </body>
</html>