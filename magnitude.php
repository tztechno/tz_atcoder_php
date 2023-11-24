<?php
$input = rtrim(fgets(STDIN));
list($A, $B) = array_map('intval', explode(' ', $input));

// Calculate and print the result
$result = pow(32, $A - $B);
echo intval($result) . "\n";
?>
