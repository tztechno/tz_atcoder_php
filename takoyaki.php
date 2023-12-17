<?php

$input = trim(fgets(STDIN));
list($N, $X, $T) = array_map('intval', explode(' ', $input));

$t = intdiv($N, $X);

if ($N % $X == 0) {
    echo $t * $T;
} else {
    echo ($t + 1) * $T;
}
