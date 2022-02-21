<?php
// lógica usando while 

$j = 1;
$n = 1;

while ($j <= 1 && $n <= 10) {
    $i = 1;
    while ($i <= 10) {
        $n2 = $n * $i;
        echo $n . "x" . $i . "=" . $n2 . "\n";
        $i++;
    }
    $n++;
}
