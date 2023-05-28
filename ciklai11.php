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

$skaiciai = "";
$count = 0;


for ($x=1; $x<=50; $x++ ){
    do {
        $skaicius = rand(1,200);
    } while (strpos($skaiciai, $skaicius));
    $skaiciai .= " $skaicius";
}
echo $skaiciai; //pirma dalis uzduoties atspausdinta

$skaiciai2 = '';
$skaicius_txt = '';
$skaicius2 = 0;
$isPrime = true;

echo "<br> <br>";

for ($y=1; $y<strlen($skaiciai); $y++){
    $simbolis = substr($skaiciai,$y,1);
    if ($simbolis !== " "){
        $skaicius_txt .= $simbolis;
    } else {
        $skaicius2 = intval($skaicius_txt);
        if ($skaicius2 === 1){
            $isPrime = false;
        }
        for ($i = 2; $i <= $skaicius2/2; $i++)
        {
            if ($skaicius2 % $i == 0)
            $isPrime = false;
            
        }
        if ($isPrime) {
            $skaiciai2 .= $skaicius2." ";
        }
        $skaicius_txt = '';
        $isPrime = true;
    }
    
}  //atrinkti naturalieji skaiciai

$skaiciai_temp = explode(" ", $skaiciai2);
sort($skaiciai_temp);

echo implode(" ",$skaiciai_temp);

?>
</body>
</html>

