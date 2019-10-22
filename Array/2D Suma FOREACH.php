<?php

$vv = [[1,2,3],[4,5,6]];

// foreach
$suma = 0;
foreach ($vv as $v) {
    foreach($v as $x) {
        $suma = $suma + $x;
    }
}
echo "batura foreach: " . $suma;