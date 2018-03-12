<html>
    <body>

        Welcome <?php echo $_POST["fname"]; ?><br>
        
       
        
        <?php
        echo "<br></br>";
        $answer = $_POST["basketball"];  
        $videogame = $_POST["videogame"];
        $movie = $_POST["movie"];
        
        
        if ($answer == "LeBron") {          
            echo "LeBron is my favortite player too!" . "<br>";    
        }
        else if($answer == "Kobe"){
            echo "Kobe is ok" . "<br>";
        }
        else if($answer == "Michael"){
            echo "You must be old" . "<br>";
        }  
        
        
        if($videogame ==  "fortnite"){
            echo "You must be a noob" . "<br>";
        }
        else if($videogame == "Call of Duty"){
            echo "I only like Call of Duty Zombies" . "<br>";
        }
        else{
            echo "That game is ok" . "<br>";
        }
        
        
        
        
        ?>
        <br></br>
        <form action="index.php" method="post">
        <button name="subject" type="submit" value="back">Back</button>
        
        </form>
        
        <?php
        
       
        ?>

    </body>
</html>