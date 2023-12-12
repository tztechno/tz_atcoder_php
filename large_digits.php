<?php
$input = rtrim(fgets(STDIN));
list($A, $B) = array_map('intval', explode(' ', $input));

$A2 = array_map('intval', str_split($A));
$B2 = array_map('intval', str_split($B));

$ans = max(array_sum($A2), array_sum($B2));

echo intval($ans) . "\n";
?>
