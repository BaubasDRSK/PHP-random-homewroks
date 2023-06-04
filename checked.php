<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $show_form = false;
    $count = count($_POST['checkbox']);
    $clicked = implode(",",$_POST['checkbox']);
    
    echo $count."   ".$clicked;
    echo "<br>";
    if (isset($_SESSION['kiek'])){
        echo $_SESSION['kiek'];
    }
    
} else {
    $how_many = rand(3,10);
    $show_form = true;
    $_SESSION['kiek'] = $how_many;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PINK</title>
</head>
<body style="background:pink">
<?php if($show_form) :?>
<form action="http://localhost:8888/php_nd/nd01/checked.php" method="post">
    <?php
    for ($i=1; $i<=$how_many; $i++){
        echo '<input type = "checkbox"  name = "checkbox[]" value="'.$i.'"/>';
    }
    ?>
    <button type="submit">POST SUBMIT</button>
</form>
<?php endif; ?>

<?php if(!$show_form) :?>
<form action="http://localhost:8888/php_nd/nd01/checked.php" method="get">
    <button type="submit">RESTART</button>
</form>
<?php endif; ?>
    
</body>
</html>