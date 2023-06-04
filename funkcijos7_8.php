<?php

function makeArray($maxCount){
    static $counter = 0;
    $masyvasTmp = [];
    for($i=1; $i<=9; $i++){
        $masyvasTmp[]= rand(1,10);
    }
    $counter++;
    if ($counter < $maxCount){
        $masyvasTmp[] = makeArray($maxCount);
    } else {
        $masyvasTmp[] = 0;
    }
return $masyvasTmp;
}

function countNumbers($array){
    static $numbersCount = 0;
    foreach ($array as $item){
        if (!is_array($item)){
            $numbersCount++;
        } else {
            countNumbers($item);
        }
    }
    return $numbersCount;

}

$masyvas[] = makeArray(rand(10,30));

echo "<pre>";
echo countNumbers($masyvas);
echo "<br>";
print_r($masyvas);