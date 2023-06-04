<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_SESSION['gameStatus']) && $_SESSION['gameStatus'] !== 1){
        $_SESSION['gameStatus'] = 1;
        $_SESSION['names'][0] = $_POST['name1'];
        $_SESSION['names'][1] = $_POST['name2'];
    }

    if ($_SESSION['isItRolled'] == 0){
        $_SESSION['isItRolled'] = 1;
        $_SESSION['dice'] = rand(1,6);
        $turn = intval($_SESSION['turn']);
        $_SESSION['scores'][$turn] = $_SESSION['scores'][$turn] + intval($_SESSION['dice']); 
        header("Location: game.php");
        die();
    } else {
        $_SESSION['isItRolled'] = 0;
        $turn = intval($_SESSION['turn']);
        $turn = $turn === 1 ? 0 : 1;
        $_SESSION['turn'] = $turn;
        $round = intval($_SESSION['round']);
        if ($round < 2) {
            $round ++;
            $_SESSION['round']= $round;
        } else {
            $_SESSION['wholeRound']++;
            $_SESSION['round']= 1;
            $score1 = intval($_SESSION['scores'][0]);
            $score2 = intval($_SESSION['scores'][1]);
            if ($score1 >= 30 || $score2 >= 30 ){
                $_SESSION['gameStatus'] = 2;
                header("Location: gameover.php");
                die();
            }
        }
        
        header("Location: game.php");
        die();
    }
}

if (isset($_SESSION['gameStatus']) && $_SESSION['gameStatus'] !== 1){
    header("Location: index.php");
    die();
}

$turn = intval($_SESSION['turn']);
$activeName = $_SESSION['names'][$turn];
$activeScore = $_SESSION['scores'][$turn];
$name1 = $_SESSION['names'][0];
$name2 = $_SESSION['names'][1];
$score1 = $_SESSION['scores'][0];
$score2 = $_SESSION['scores'][1];
$round = $_SESSION['round'];
$wholeRound = $_SESSION['wholeRound'];
$roll = intval($_SESSION['isItRolled']);
$dice = intval($_SESSION['dice']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Dice Roll GAME</title>
</head>
<body>
    <div class='rezultatas'>
        <h3>Round: <?= $wholeRound ?></h3>
        <h4 class="playername"><?= $name1?>: <?=$score1?></h4>
        <h4 class="playername"><?= $name2?>: <?=$score2?></h4>
    </div>    
    <div class="roll center-wrapper">
        <h2 class="actualname"><?=$activeName?></h2>
        <h2 class="dice">
            <?php if ($roll) :?>
                <?=  $dice ?>
            <?php else :?>
            ...
            <?php endif ?>
        </h2>
        <form action="game.php" method="post">
            <button type="submit">
                <?php if ($roll) :?>
                    NEXT
                <?php else :?>
                    ROLL
                <?php endif ?>
            </button>
        </form>

    </div>
</body>
</html>