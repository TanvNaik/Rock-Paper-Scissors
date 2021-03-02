<!DOCTYPE html>
<html>
    <head>
        <title>Rock Paper Scissors</title>
        <style>
            <?php include "style.css"; ?>
        </style>
        
    </head>
    <body>
        <div class="container">
            <h1>Welcome to Rock Paper Scissors</h1>
            <p>
            <form action="game.php" method="get">
                <label for="name">Enter your Name:</label>
                <input type="text" id="name" name="name">
                <input type="submit" value="Play"> 
            </form>
            </p>
        </div>
    </body>
</html>
