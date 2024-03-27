<?php
function isFibonacci($num) {

    $fibonacci = array(0, 1);
    

    while ($fibonacci[count($fibonacci) - 1] <= $num) {
        $nextFibonacci = $fibonacci[count($fibonacci) - 1] + $fibonacci[count($fibonacci) - 2];
        $fibonacci[] = $nextFibonacci;
    }
    

    if (in_array($num, $fibonacci)) {
        return true;
    } else {
        return false;
    }
}

$numero = 13;

if (isFibonacci($numero)) {
    echo "$numero pertence à sequência de Fibonacci.";
} else {
    echo "$numero não pertence à sequência de Fibonacci.";
}
?>
