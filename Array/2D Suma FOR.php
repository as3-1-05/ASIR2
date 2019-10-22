<?php 

$vv = [[1,2,3],[4,5,6]];

// for
$suma = 0;
for ($i=0; $i<count($vv); $i++) {
    for ($j=0; $j<count($vv[0]); $j++) {
        //echo $vv[$i][$j];
        $suma = $suma + $vv[$i][$j];
    }
}
echo "batura for: " . $suma . "<br>";