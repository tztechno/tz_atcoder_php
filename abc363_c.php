abc363_c.php
#################################################
[TLE]

<?php

function isNonPalindromic($s, $k) {
    $len = strlen($s);
    for ($i = 0; $i <= $len - $k; $i++) {
        $substring = substr($s, $i, $k);
        if (isPalindrome($substring)) {
            return false;
        }
    }
    return true;
}

function isPalindrome($s) {
    $len = strlen($s);
    for ($i = 0; $i < $len / 2; $i++) {
        if ($s[$i] !== $s[$len - 1 - $i]) {
            return false;
        }
    }
    return true;
}

function permute($str) {
    $results = [];
    permuteHelper(str_split($str), 0, $results);
    return array_unique($results);
}

function permuteHelper($arr, $index, &$results) {
    if ($index === count($arr)) {
        $results[] = implode('', $arr);
        return;
    }

    for ($i = $index; $i < count($arr); $i++) {
        swap($arr, $index, $i);
        permuteHelper($arr, $index + 1, $results);
        swap($arr, $index, $i); // backtrack
    }
}

function swap(&$arr, $i, $j) {
    $temp = $arr[$i];
    $arr[$i] = $arr[$j];
    $arr[$j] = $temp;
}

// Read input
$stdin = fopen('php://stdin', 'r');
$firstLine = fgets($stdin);
$parts = explode(' ', trim($firstLine));
$N = (int)$parts[0];
$K = (int)$parts[1];

$S = trim(fgets($stdin));

// Generate all unique permutations of the string
$perms = permute($S);

$count = 0;
foreach ($perms as $perm) {
    if (isNonPalindromic($perm, $K)) {
        $count++;
    }
}

echo $count . PHP_EOL;

?>
