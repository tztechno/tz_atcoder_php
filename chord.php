<?php

$s = trim(fgets(STDIN));

$name = ["ACE", "BDF", "CEG", "DFA", "EGB", "FAC", "GBD"];

if (in_array($s, $name)) {
    echo "Yes\n";
} else {
    echo "No\n";
}
