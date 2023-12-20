<?php

$input = rtrim(fgets(STDIN));
list($A,$B) = array_map('intval', explode(' ', $input));
$XB = 2*$A+100;
echo intval($XB-$B) ."\n";

?>
