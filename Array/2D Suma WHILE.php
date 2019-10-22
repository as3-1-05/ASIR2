<?php

$vv = [[1,2,3],[4,5,6]];

// while
$suma = 0;
$i=0;
$j=0;
while ($i<count($vv)) {
    $j=0;
    while ($j<count($vv[0])) {
        //echo $vv[$i][$j];
        $suma = $suma + $vv[$i][$j];
        $j++;
    }
    $i++;
}
echo "batura while: " . $suma . "<br>";
