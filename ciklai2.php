<?php
//sugeneruoja masyva is 10 nariu kuriuose masyvai po 5 narius nuo 5iki25
for ($i=1; $i<=10; $i++){
    for ($e=1; $e<=5; $e++){
        $temp[] = rand(5,25);
    }
    $arr[] = $temp;
    $temp = [];
}

//atspausdina masyva is masyvu 
foreach ($arr as $a){
    echo implode(" ",$a);
    echo "<br>";
}
$max = 0;
//suskaiciuojam kiek didesniu uz 10 nariu
$elementsBigerThan10 = 0;
foreach ($arr as $ar){
    foreach($ar as $a){
       $max = $a > $max? $a: $max; 
       if ($a > 10){
            $elementsBigerThan10++;
       }}
    }
echo "didesniu uz desimt: $elementsBigerThan10 <br>";    
echo "didziausias: $max";    
echo "<br>";

$sumos = [0,0,0,0,0];
foreach ($arr as $in => $ar){
    foreach($ar as $i => $a){
        $sumos[$i] += $a ;
    }
}

echo implode(" ", $sumos);
echo "<br>";


foreach($arr as &$a){
    for ($i=1; $i<=2; $i++){
        $a[] = rand(5,25);
    }
}
unset($a);
//atspausdina masyva is masyvu 
foreach ($arr as $a){
    echo implode(" ",$a);
    echo "<br>";
}
$sumuMasyvas = [];
foreach ($arr as $ar){
    $sum = 0;
    foreach($ar as $a){
        $sum += $a;
    }
    $sumuMasyvas[] = $sum;
}

echo "Sumos lygu: ".implode(" ", $sumuMasyvas);