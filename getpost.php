<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $color = "red";
    header('Location: http://localhost:8888/php_nd/nd01/getpost.php?color=blue', true, 303);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $color = $_GET['color'] ?? "red";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET POST</title>
</head>
<body style="background:<?= $color?>">

<form action="http://localhost:8888/php_nd/nd01/getpost.php" method="post">
    <button type="submit">POST SUBMIT</button>
</form>

<form action="http://localhost:8888/php_nd/nd01/getpost.php" >
    <button type="submit">GET SUBMIT</button>
</form>
    
</body>
</html>