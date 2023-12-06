<?php
$S = trim(fgets(STDIN));
$N = strlen($S);

if ($N < 4) {
    $S = str_pad($S, 4, "0", STR_PAD_LEFT);
    $N = strlen($S); // Recalculate the length after padding
}

$result;

if ($N <= 125) {
    $result = 4;
} else if ($N <= 211) {
    $result = 6;
} else {
    $result = 8;
}

echo $result . "\n";
?>
