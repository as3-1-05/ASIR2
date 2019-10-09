



<?php

$v = [1,5,6,5,77,88,333,444,66,0];


$suma = 0;
$i = 0;
while ($i < count($v)) {
    $suma = $suma + $v[$i];
    $i++;
}
echo "batura while: " . $suma;