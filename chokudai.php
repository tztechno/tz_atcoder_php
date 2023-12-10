<?php
$S = trim(fgets(STDIN));
list($a, $b) = explode(' ', trim(fgets(STDIN)));
$charArray = str_split($S);
list($charArray[$a - 1], $charArray[$b - 1]) = array($charArray[$b - 1], $charArray[$a - 1]);
$S = implode('', $charArray);
echo $S . "\n";
?>

##########################

<?php
$S = trim(fgets(STDIN));

list($a, $b) = explode(' ', trim(fgets(STDIN)));

// Ensure indices are valid
if ($a > 0 && $b > 0 && $a <= strlen($S) && $b <= strlen($S)) {
    // Convert string to array for manipulation
    $charArray = str_split($S);

    // Swap characters at indices $a-1 and $b-1
    list($charArray[$a - 1], $charArray[$b - 1]) = array($charArray[$b - 1], $charArray[$a - 1]);

    // Convert array back to string
    $S = implode('', $charArray);

    echo $S . "\n";
} else {
    echo "Invalid indices.\n";
}
?>
