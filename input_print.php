<?php

$N = intval(trim(fgets(STDIN)));
$A = array_map('intval', explode(' ', trim(fgets(STDIN))));

echo $N . PHP_EOL;
echo implode(' ', $A) . PHP_EOL;

?>
