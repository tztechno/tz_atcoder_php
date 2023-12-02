<?php
$N = intval(fgets(STDIN));
$m = intval($N / 5);
$diff = $N % 5;
if ($diff <= 2) {
    $result = $m * 5;
} else {
    $result = ($m + 1) * 5;
}
echo $result . PHP_EOL;
?>
