<?php
// uzduotis 01
echo '<p>Uzduotis 01 </p>';
$vardas = 'Povilas';
$pavarde = 'Gr';
$gimimoMetai = 1982;
$einamiejiMetai = 2023;
echo '<p>Aš esu '.$vardas.' '.$pavarde.'. Man yra '.($einamiejiMetai-$gimimoMetai).' metai(ų).</p>';

echo '<pre>';
echo '<p>Uzduotis 02 </p>';
$a = rand(0, 4);
echo $a . "\n";
$b = rand(0, 4);
echo $b . PHP_EOL;
$rez = ($a > $b && $b != 0) ? round(($a / $b), 2) : (($b != 0 && $a != 0) ? round(($b / $a), 2) : "Dalyba is nulio negalima");
echo $rez;
echo '</pre>';

echo '<pre>';
echo '<p>Uzduotis 03 </p>';
$aa = rand(0,25);
$bb = rand(0,25);
$cc = rand(0,25);
echo $aa.', '.$bb.', '.$cc."\n";
$rezz = $aa + $bb + $cc - min($aa, $bb, $cc) - max($aa, $bb,$cc);
echo $rezz;
echo '</prev>';


echo '<pre>';
echo '<p>Uzduotis 04 </p>';
$aaa = rand(1,10);
$bbb = rand(1,10);
$ccc = rand(1,10);

echo "A-$aaa, B-$bbb, C-$ccc \n";
if ($aaa + $bbb > $ccc && $aaa + $ccc > $bbb && $bbb + $ccc > $aaa) {
    echo "The lengths can form a triangle.";
} else {
    echo "The lengths cannot form a triangle.";
};



echo '<p>Uzduotis 05 </p>';
$a4 = rand(0,2);
$b4 = rand(0,2);
$c4 = rand(0,2);
$d4 = rand(0,2);
$nuliai = 0;
$vienetai = 0;
$dvejatai = 0;
echo "$a4, $b4, $c4, $d4 \n";

switch ($a4){
    case 0:
        $nuliai++;
        break;
    case 1:
        $vienetai++;
        break;
    case 2:
        $dvejatai++;
        break;
}

switch ($b4){
    case 0:
        $nuliai++;
        break;
    case 1:
        $vienetai++;
        break;
    case 2:
        $dvejatai++;
        break;
}

switch ($c4){
    case 0:
        $nuliai++;
        break;
    case 1:
        $vienetai++;
        break;
    case 2:
        $dvejatai++;
        break;
}

switch ($d4){
    case 0:
        $nuliai++;
        break;
    case 1:
        $vienetai++;
        break;
    case 2:
        $dvejatai++;
        break;
}
echo "Nuliai: $nuliai, vienetai: $vienetai, dvejetai: $dvejatai";
echo '</prev>';

echo '<p>Uzduotis 06 </p>';
$headerNbr = rand(1,6);
echo "<h$headerNbr>$headerNbr</h$headerNbr>";


echo '<p>Uzduotis 11 </p>';

$sk1 = rand(-10,10);
$sk2 = rand(-10,10);
$sk3 = rand(-10,10);
$color1 = $sk1<0?"green":($sk1===0?"red":"blue");
$color2 = $sk2<0?"green":($sk2===0?"red":"blue");
$color3 = $sk3<0?"green":($sk3===0?"red":"blue");
echo "<p style=color:$color1>$sk1<p><br><p style=color:$color2>$sk2<p><br><p style=color:$color3>$sk3<p>";

echo '<p>Uzduotis 08 </p>';

$a = rand(1000,9999);
$b = rand(1000,9999);
$c = rand(1000,9999);
$d = rand(1000,9999);
$e = rand(1000,9999);
$f = rand(1000,9999);
echo "$a, $b, $c, $d, $e, $f";
echo "<br>";
$nbr1 = min($a, $b, $c, $d, $e, $f);
$nbr6 = max($a, $b, $c, $d, $e, $f);
$nbr2 = 0;
$nbr3 = 0;
$nbr4 = 0;
$nbr5 = 0;

if ($a === $nbr1) {
    $a = $nbr6;
} elseif ($b === $nbr1) {
    $b = $nbr6;
} elseif ($c === $nbr1) {
    $c = $nbr6;
} elseif ($d === $nbr1) {
    $d = $nbr6;
} elseif ($e === $nbr1) {
    $e = $nbr6;
} elseif ($f === $nbr1) {
    $f = $nbr6;
}

$nbr2 = min($a, $b, $c, $d, $e, $f);

if ($a === $nbr2) {
    $a = $nbr6;
} elseif ($b === $nbr2) {
    $b = $nbr6;
} elseif ($c === $nbr2) {
    $c = $nbr6;
} elseif ($d === $nbr2) {
    $d = $nbr6;
} elseif ($e === $nbr2) {
    $e = $nbr6;
} elseif ($f === $nbr2) {
    $f = $nbr6;
}

$nbr3 = min($a, $b, $c, $d, $e, $f);

if ($a === $nbr3) {
    $a = $nbr6;
} elseif ($b === $nbr3) {
    $b = $nbr6;
} elseif ($c === $nbr3) {
    $c = $nbr6;
} elseif ($d === $nbr3) {
    $d = $nbr6;
} elseif ($e === $nbr3) {
    $e = $nbr6;
} elseif ($f === $nbr3) {
    $f = $nbr6;
}

$nbr4 = min($a, $b, $c, $d, $e, $f);

if ($a === $nbr4) {
    $a = $nbr6;
} elseif ($b === $nbr4) {
    $b = $nbr6;
} elseif ($c === $nbr4) {
    $c = $nbr6;
} elseif ($d === $nbr4) {
    $d = $nbr6;
} elseif ($e === $nbr4) {
    $e = $nbr6;
} elseif ($f === $nbr4) {
    $f = $nbr6;
}

$nbr5 = min($a, $b, $c, $d, $e, $f);



echo "$nbr1 $nbr2 $nbr3 $nbr4 $nbr5 $nbr6";
