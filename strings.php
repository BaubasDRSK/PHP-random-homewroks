<?php
$a = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$b = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
echo preg_replace("/[,.!?:;]/","",$a);
echo "<br>";
echo preg_replace("/[,.!?:;]/","",$b);
echo "<br>";

$c = explode(" ",preg_replace("/[,.!?:;]/","",$a));
$d = explode(" ", preg_replace("/[,.!?:;]/","",$b));
$visi = array_merge($c, $d);
echo '<br>';
echo "Viso zodziu bendrame sakinyje:".count($visi);
echo "<br>";

$numbers = range(0, (count($visi)-1));
shuffle($numbers);
$randomNumbers = array_slice($numbers, 0, 10);
echo "Atsitiktiniu 10 skaiciu:".implode(" ",$randomNumbers);
echo"<br>";

$finalStr = '';
for ($i = 0; $i <= 9; $i++) {
    $finalStr .= $visi[$randomNumbers[$i]]." ";
  }
echo "Naujai sugeneruotas sakinys:<br>";
echo "<h3>$finalStr</h3>";