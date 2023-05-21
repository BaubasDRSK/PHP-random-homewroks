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



echo '<p>Uzduotis 04 </p>';
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