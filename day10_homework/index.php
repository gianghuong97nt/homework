<?php
//chu vi hinh chu nhat
function chuvi($a,$b){
    $p = ($a+$b)*2;
    return $p;
}

function dientich($a,$b){
    $s = $a*$b;
    return $s;
}

$a = 5;
$b = 6;
$P = chuvi($a,$b);
$S = dientich($a,$b);

echo 'Chu vi: '. $P;
echo '<br>';
echo 'Dien tich: '.$S;

