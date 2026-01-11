<!DOCTYPE html> 
<html>
    <head> 
        <title>Number Guessing Game</title> 
    </head>
     <body> 
        <h2>Guess a number between 1 and 6</h2> 
        <form method="post"> 
            <label for="guess">Choose a number:</label>
             <select name="guess" id="guess" required>
                 <?php for ($i = 1; $i <= 6; $i++) {
                     echo "<option value=\"$i\">$i</option>"; }
                      ?> 
                      </select> 
                      <button type="submit">Submit</button> 
                    </form> 
                    <?php
                     if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
                        $userGuess = intval($_POST['guess']);
                         $randomNumber = rand(1, 6);
                          if ($userGuess === $randomNumber) {
                             echo "<p style='color:green;'>You win! The number was $randomNumber.</p>";
                              } else { echo "<p style='color:red;'>Try again! The number was $randomNumber.</p>"; } } ?> </body> </html></select></form></body>