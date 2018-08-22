<?php
function chuvi($r){
    $p = 2*$r*3.14;
    return $p;
}

function dientich($r){
    $s = $r*$r*3.14;
    return $s;
}
$a = 10;
$S = dientich($a);
$P = chuvi($a);

echo 'Chu vi hinh tron: '.$P;
echo '<br>';
echo 'Dien tich hinh tron: '.$S;