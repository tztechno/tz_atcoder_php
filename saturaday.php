<?php

$S = trim(fgets(STDIN));

$name = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
$days = [5, 4, 3, 2, 1];

$mapping = array_combine($name, $days);

if (array_key_exists($S, $mapping)) {
    echo $mapping[$S] . "\n";
} else {
    echo "Invalid input for day\n";
}

?>
