<?php
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Homework 3 </title>
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
        
        <form action="action_page.php" method="post">
            

        
        
        
        
            <fieldset>
                <legend>Personal information:</legend>
                What is your first name? <br>
                First name: <input type="text" name="fname" id="fname"><br>
                What is your last name? <br>
                Last name: <input type="text" name="lname"><br>
            </fieldset>
        
            <br> </br>
            <br> 
        
        
            Who is the greatest Basketball player of all-time?<br>
            <input type="radio" name="basketball" value="LeBron">   <label for="rd1">LeBron James   </label>   <br>
            <input type="radio" name="basketball" value="Kobe">     <label for="rd2">Kobe Bryant    </label>   <br> 
            <input type="radio" name="basketball" value="Michael">  <label for="rd3">Michael Jordan </label>   <br>
            <input type="radio" name="basketball" value="Other">    <label for="rd3">Other          </label>  
        
        
        
            <br> </br>
            <br> 
        
      
            What is your favorite video games?<br>
            <input type="radio" name="videogame" value="Call of Duty">  <label for="rd1">Call of Duty  </label>   <br>
            <input type="radio" name="videogame" value="Battlefield">   <label for="rd2">Battlefield   </label>   <br>
            <input type="radio" name="videogame" value="Fortnite">      <label for="rd3">Fortnite      </label>   <br>
            <input type="radio" name="videogame" value="Other">         <label for="rd4">Other         </label>  
        
        
            <br> </br>
            <br> 
        
        
            Who is the best music artist?<br>
            <input type="radio" id="rd1" name="music" value="Kendrick Lamar">  <label for="rd1">Kendrick Lamar  </label>   <br>
            <input type="radio" id="rd2" name="music" value="J cole">          <label for="rd2">J Cole          </label>   <br>
            <input type="radio" id="rd3" name="music" value="Logic">           <label for="rd3">Logic           </label>   <br>
            <input type="radio" id="rd4" name="music" value="Other">           <label for="rd4">Other         </label>  
        
        
            <br> </br>
            <br> 
        
        
            Which movie are you most excited about in 2018?<br>
            <input type="radio" id="rd1" name="movie" value="Avengers">      <label for="rd1">Avengers: Infinity War  </label>   <br>
            <input type="radio" id="rd2" name="movie" value="Deadpool">      <label for="rd1">Deadpool 2              </label>   <br>
            <input type="radio" id="rd3" name="movie" value="Incredibles">   <label for="rd1">The Incredibles 2       </label>   <br>
            <input type="radio" id="rd4" name="movie" value="Other">         <label for="rd4">Other                   </label>   
        
            <br> </br>
            <br> 
        
            Was this fun?<br>
            <select name="list" form="myform">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
                <option value="Maybe">Maybe</option>
            </select>
        
            <br></br>
        
            <input type="submit" value="submit">
            
        </form>
    </body>
    
</html>

