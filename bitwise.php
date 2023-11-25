<?php

list($A, $B) = explode(' ', trim(fgets(STDIN)));

for ($i = 0; $i < 256; $i++) {
    if (($A ^ $i) == $B) {
        echo $i . PHP_EOL;
        break;
    }
}

?>
