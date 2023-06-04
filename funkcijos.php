<?php

$str = md5(time());
echo $str;
echo "<br>";

function pakeitimai($matches){
    foreach ($matches as $match){
        if (is_numeric($match)){
            echo "<h1 style='display:inline;'>$match</h1>";
        } else {
            echo "$match";
        }
    }
};

echo preg_replace_callback("/[a-z]+|\d+/", 'pakeitimai', $str);

echo "<br>";
echo "<br>";
// 4 

function dalikliai($nbr){
    if($nbr <= 1){ 
        echo "Skaicius turetu buti didesnis uz 1"; 
        return;
    }
    if($nbr % 1 != 0){
        echo "Turetu buti tik sveiki skaiciai";
        return;
    }
    $kiek = 0;
    for($i=2; $i<$nbr; $i++){
        if($nbr % $i === 0){
            $kiek++;
        }
    }
    return $kiek;
}
echo "<br>";
echo "Dalikliu kiekis: ".dalikliai(59);

//55
echo "<br> 55 uzduotis <br>";
$masyvas = [];
for ($i=1; $i<=100; $i++){
    $masyvas[] = rand(33,77);
}
echo implode(" ", $masyvas);

usort($masyvas,fn ($x, $y) => dalikliai($x) <=> dalikliai($y));
echo "<br>";
echo "<br>";
foreach ($masyvas as $m){
    echo "$m =>". dalikliai($m) ."<br>";
}