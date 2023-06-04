<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-size:14px;
        }

        p{
            line-height:7px;
            margin:0;
        }
        
    </style>
</head>
<body>
<?php

    



    echo "<div class='skaiciai' styel='width:100vw;'>";
    $sqrSide = 50;
    for ($x = 1; $x <= $sqrSide; $x++) {
        echo "<p>";
        for ($y = 1; $y <= $sqrSide; $y++) {
            if ($y === $x || $y === $sqrSide + 1 - $x){
                echo "<i style='color:red;'>*</i>";
            } else {
                echo "<i>*</i>";
            }
            
        }
        echo "</p>";
        }
    
    echo "</div>";    
    echo "<br>";
    
?>
</body>
</html>

