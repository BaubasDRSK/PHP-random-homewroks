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

echo "<br>";
echo "<br>";
echo "<br>";
$nArray = [];
$temp = [];
for ($i = 1; $i <=10; $i++){
    $kiekis = rand(2,20);
    for ($e = 1; $e<= $kiekis; $e++){
        $temp[] = chr(rand(65,90));
    }
    $nArray[] = $temp;
    $temp = [];
}

foreach ($nArray as &$aa){
    arsort($aa);
    $aa = array_reverse($aa);
}
unset($aa);

foreach ($nArray as $a){
    echo implode(" ",$a);
    echo "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";

$nnArray = [];

foreach($nArray as $aa){
    $ilgis = count($aa);
    if (!in_array("K", $aa)){
        $ilgis += 20;
    }
    $nnArray[$ilgis] =$aa;
}

ksort($nnArray);

foreach ($nnArray as $a){
    echo implode(" ",$a);
    echo "<br>";
}


//55555

echo "<br>";
echo "<br>";

$nnnArr = [];
$usrId = [];

for ($i=1; $i<= 30; $i++){
    do {
        $id = rand(1,1000000);
    } while (in_array($id, $usrId));
    $usrId[] = $id;
    $temp["user_id"]=$id;
    $temp["place_in_row"]=rand(0,100);
    $nnnArr[]=$temp;
}
foreach ($nnnArr as $a){
    echo http_build_query($a,''," / ");
    echo "<br>";
}

///66666



$user_id  = array_column($nnnArr, 'user_id');

// Sort the data with volume descending, edition ascending
// Add $data as the last parameter, to sort by the common key
array_multisort($user_id, SORT_ASC, $nnnArr);

echo"<br>";
foreach ($nnnArr as $a){
    echo http_build_query($a,''," / ");
    echo "<br>";
}

$place_in_row = array_column($nnnArr, 'place_in_row');
array_multisort($place_in_row, SORT_DESC, $nnnArr);

echo"<br>";
foreach ($nnnArr as $a){
    echo http_build_query($a,''," / ");
    echo "<br>";
}

////888888
$arr8 =[];
$arr8_2 = [];
for ($i=1; $i <=10; $i++){
    $x = rand (0, 5);
    if ($x === 0){
        $arr8[] = rand(0,10);
    } else {
        for ($e=1; $e<=$x; $e++){
            $arr8_2[]=rand(0,10);
        }
        $arr8[] = $arr8_2;
        $arr8_2 = [];
    }
}
echo"<pre>";
var_dump($arr8);
echo"</pre>";

//// 9999
$sums = [0];
foreach ($arr8 as $aaa){
    if (gettype($aaa) === "integer") {
        $sums[0]  += $aaa;
    } else {
        $sums[] = array_sum($aaa);
    }
}

echo "<br>";
echo implode(" ", $sums);

sort($sums);

echo "<br>";
echo implode(" ", $sums);
echo "<br>";


////10 10 10 10 
$bigArr = [];
$smallArr = [];
$itemArr = [];
$simboliai = ['#','%','+','*','@','裡'];
$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
    
for ($i = 1; $i <= 10; $i++){
    for ($e = 1; $e <= 10; $e++){
        $item["value"] = $simboliai[array_rand($simboliai,1)];
        $item["color"] = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
        $smallArr[] = ["value"=>$item["value"],"color"=> $item["color"]];
    }
    $bigArr[] = $smallArr;
    $smallArr = [];
}

foreach ($bigArr as $small){
    echo "<p style='height:8px'>";
    foreach($small as $itm){
        echo "<span style='display: inline-block; width: 20px; height: 20px; color:".$itm['color']."'>".$itm['value']."</span>";
    }
    echo "</p>";
}

