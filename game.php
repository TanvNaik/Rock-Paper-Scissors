<?php

if ( ! isset($_GET['name']) || strlen($_GET['name']) < 1  ) {
    die('Name parameter missing');
}

// If the user requested logout go back to index.php
if ( isset($_POST['logout']) ) {
    header('Location: index.php');
    return;
}

// Setting up the values for the game...
// 0 is Rock, 1 is Paper, and 2 is Scissors

$names = array('Rock', 'Paper', 'Scissors');
$human = isset($_POST["human"]) ? $_POST['human'] + 0 : -1;

$computer = rand(0,2);

function check($computer, $human) {
    
    if ( $human == $computer ) {
        return "Tie";
    } else if ( ($human == 0 && $computer==2)||($human==1 && $computer==0)||($human== 2 && $computer==1) ) {
        return "You Win!";
    } else {
        return "You Lose!";
    }
}

$result = check($computer, $human);

function insertImg($num){
    if($num == 0){
        return "images/stone.png";
    }
    else if($num == 1){
        return "images/paper.png";
    }
    else if($num == 2){
        return "images/scissor.png";
    }
}
$playerImg = insertImg($human);
$computerImg= insertImg($computer);

?>

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
            <h1>Rock Paper Scissors</h1>
            <hr>
            <div class="subContainer">
            <div class="player">
            <?php
                    echo "<h4>";
                    echo htmlentities($_REQUEST['name']);
                    echo ":</h4>\n";
            ?>
                <form method="post" class="gameForm">
                    <select name="human"id ="human">
                        <option value="-1" selected>Select</option>
                        <option value="0">Rock</option>
                        <option value="1">Paper</option>
                        <option value="2">Scissors</option>
                    </select>
                    <input type="submit" value="Play" id="Play">
                    <input type="submit" name="logout" value="Logout">
                </form>
                <?php 
                    if($human <> -1){
                        echo "<img src=$playerImg>";
                    }
                ?>
            </div>
            <div class="computer">
            <h4>Computer:</h4>
            <pre>
            
            

            </pre>
                <?php 
                if($human <> -1){
                    echo "<img src=$computerImg>";
                }
                ?>
            </div>
            </div>
        </div>
        <?php
             if($human <> -1){
                echo "<div class=";
                echo "result";
                echo "> $result</div>";
            }
        ?>
    </body>
</html>
                  