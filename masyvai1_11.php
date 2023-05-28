<?php
$masyvas = [];

for ($i = 1; $i <= 101; $i++) {
    do {
        $atsitiktinis = rand(0, 300);
    } while (in_array($atsitiktinis, $masyvas));
    $masyvas[] = $atsitiktinis;
    sort($masyvas);
}

$viduriukas = array_pop($masyvas); //didziasias skaicius random pirminio masyvo, kuris bus viduryje;
$puse_sumos = (array_sum($masyvas) / 2);
echo "<br>";
echo $puse_sumos . " <=Puse masyvo sumos <br>";


//indexu masyvas
$x = range(0, 99);
$laikina_puse_nariu = [];
echo "Visas surusiuotas masyvas <br>";
echo implode(' ', $masyvas) . "<br>";

$time_start = microtime(true);

do {
    // $z = array_rand($x,50);  
    shuffle($masyvas);
    list($array1, $array2) = array_chunk($masyvas, ceil(count($masyvas) / 2));
} while (!(array_sum($array1) >= $puse_sumos - 15 && array_sum($array1) <= $puse_sumos + 15));

$time_end = microtime(true);
//dividing with 60 will give the execution time in minutes otherwise seconds
$execution_time = ($time_end - $time_start);
//execution time of the script
echo '<b>Total Execution Time:</b> ' . $execution_time . ' S';


sort($array1);
sort($array2);
$array2 = array_reverse($array2);


echo "<br>";
echo "<br>" . implode(" ", $array1) . " <= Masyvo1 suma : " . array_sum($array1);
echo "<br>" . implode(" ", $array2) . " <= Masyvo2 suma : " . array_sum($array2);
echo "<br>";

echo "<br>";
echo implode(" ", $array1) . " " . "<h2 style='display: inline'>$viduriukas</h2>" . " " . implode(" ", $array2);
echo "<br>";
echo "Pavyko";
