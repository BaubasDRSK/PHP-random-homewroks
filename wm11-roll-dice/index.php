<?php
session_start();

$playerOneName = $_SESSION["name1"] ?? "Player1";
$playerTwoName = $_SESSION["name2"] ?? "Player2";
$_SESSION['names'] = [$playerOneName, $playerTwoName];
$playerOneScore = 0;
$playerTwoScore = 0;
$_SESSION['scores'] = [$playerOneScore, $playerTwoScore];
$_SESSION['turn'] = 1;
$_SESSION['gameStatus'] = 0; //0 initial , 1 started, 2 finished;
$_SESSION['round'] = 0;
$_SESSION['wholeRound'] = 1;
$_SESSION['isItRolled'] = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Roll dice</title>
</head>
<body>

    <div class="center-wrapper">
        <form class='beginningForm' action="game.php" method="post">
            <input type="text" name="name1" placeholder="Input player one name">
            <input type="text" name="name2" placeholder="Input player two name">
            <button type="submit">START</button>
        </form>
    </div>

    
</body>
</html>