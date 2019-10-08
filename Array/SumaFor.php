<?php 

$v = [98,5,6];

//$suma = $v[0] + $v[1] + $v[2];
//echo "batura : " . $suma;

$suma = 0;
for ($i = 0; $i < 3; $i++){
    $suma = $suma + $v[$i];
    echo "<br>";
}

echo "batura : " . $suma;