<?php

$x = trim(fgets(STDIN));

if ($x == strtolower($x)) {
    echo "a\n";
} else {
    echo "A\n";
}
