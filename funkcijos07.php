

<?php
$masyvas = [];
function makeArray(){
    static $counter = 1;
    $masyvasTmp = [];
    for($i=1; $i<=10; $i++){
        if($i != 10){
            $masyvasTmp[]= rand(1,10);
        } else {
            $counter++;
            if ($counter < 4){
                makeArray();
            } else {
                $masyvasTmp[]= 0;
            }
        }
        
    }
    return $masyvasTmp;
}

$masyvas[] = makeArray();

echo "<pre>";
print_r($masyvas);