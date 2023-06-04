<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<pre>";
    print_r ($_POST);
    echo "</pre>";
} else {
    header('Location: http://localhost:8888/php_nd/nd01/pink.php');
    die();
}


?>