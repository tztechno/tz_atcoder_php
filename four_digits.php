<?php
$S = trim(fgets(STDIN));
$n = strlen($S);
if ($n < 4) {
    $S = str_pad($S, 4, "0", STR_PAD_LEFT);
}
echo $S . "\n";
?>
