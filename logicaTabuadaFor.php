<?php 
// lógica usando For

$j = 1;
$n = 1;

while($j <= 1 && $n <= 10){
    $n2 = 1;
    for($i = 1; $i <= 10; $i++){
        $n2 = $n * $i;
        echo $n . "x" . $i . "=" . $n2 . "\n";        
    }
    $n++;
}