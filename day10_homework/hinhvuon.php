<?php
function chuvi($a){
    $p = $a * 4;
    return $p;
}

function dientich($a){
    $s = $a * $a;
    return $s;
}
$a = 4;
$P = chuvi($a);
$S = dientich($a);

echo 'Chu vi hinh vuong: '.$P;
echo '<br>';
echo 'Dien tich hinh vuong: '.$S;
