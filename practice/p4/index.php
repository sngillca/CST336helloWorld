<!DOCTYPE html>
<html>
    <meta charset="utf-8" />
    <title>Practice 4</title>
    
    <body>
                <form action="index.php" method="POST">
            Rows<input type="text" name="rows"/>
            <br/>
            Columns<input type="text" name="columns"/>
            <br/>
            Select<select type="text" name="face"/>
            <option value ="hearts">Hearts</option>
            <option value ="clubs">Clubs</option>
            <option value ="diamonds">Diamonds</option>
            <option value ="spades">Spadess</option>
            <br/>
            
            
            
            <div>
                <input type="submit" value="Save" />
            </div>
        </form>
        <?php

           
            function createDeck(){
                $face = array("clubs","diamonds","hearts","spades");
                $deck = array();
                $randFace = rand(0,3);
                $randVal = rand(1,13);
                $aceCount = 0;
                $kingCount = 0;
                for($i = 0; $i<5; $i++){
                    if($face[$i] != $_POST['face']){
                    array_push($deck,'<img src="/practice/p4/cards/'.$face[$i].'/'.$randVal.'.png" />' );
                    if($randVal[$i] == 1){
                        $aceCount+=1;
                    }
                    
                    } else {
                        
                    }
                }//for    
                echo $deck[0];
                }//creatDeck;
                
                if(isset($_POST['rows'])){
                    echo $_POST['rows'];
                }
                if(isset($_POST['columns'])){
                    echo $_POST['columns'];
                }
                if(isset($_POST['face'])){
                    echo $_POST['face'];
                }
                
                for($i = 0; $i < $_POST['rows']; $i++){
                    
                    for($j =0; $j < $_POST['columns']; $j++){
                        createDeck();
                        
                    }
                    echo '<br/>';
                     
                }
        ?>
        

    </body>
</html>