<?php
session_start();

if (isset($_SESSION['gameStatus']) && $_SESSION['gameStatus'] !== 2){
    header("Location: index.php");
    die();
}

$name1 = $_SESSION['names'][0];
$name2 = $_SESSION['names'][1];
$score1 = intval($_SESSION['scores'][0]);
$score2 = intval($_SESSION['scores'][1]);
$round = $_SESSION['round'];
$wholeRound = $_SESSION['wholeRound'];
$winner = $score1 > $score2 ? $name1 :( $score1 === $score2 ? "DRAW" : $name2 );
$winnerScore= $score1 >= $score2 ? $score1 : $score2;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Game over</title>

    <div class="center-wrapper">
        <div class="result">
            <p>Winner is:</p>
            <h1 class="winner"><?= $winner ?> with score: <?= $winnerScore ?></h1>
        </div>
        <div class="info">
            <p>Rounds played: <?=$wholeRound ?></p>
            <p>Player1: <?=$name1 ?>, with score: <?=$score1 ?></p>
            <p>Player2: <?=$name2 ?>, with score: <?=$score2 ?></p>
        </div>
    </div>
</head>
<body>
    
</body>
</html>