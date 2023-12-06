<?php
$N = trim(fgets(STDIN));
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
