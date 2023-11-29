<?php

$X = (float)fgets(STDIN);

$a = (int)($X * 10);

if ($a % 10 >= 5) {
    echo (int)$X + 1 . "\n";
} elseif ($a % 10 <= 4) {
    echo (int)$X . "\n";
}

?>
