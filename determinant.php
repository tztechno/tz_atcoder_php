<?php

$input1 = rtrim(fgets(STDIN));
list($a, $b) = array_map('intval', explode(' ', $input1));

$input2 = rtrim(fgets(STDIN));
list($c, $d) = array_map('intval', explode(' ', $input2));

$ans = $a * $d - $b * $c;
echo intval($ans) . "\n";

?>
