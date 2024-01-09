//ABC192_B lowerupper

<?php
$S = str_split(trim(fgets(STDIN)));
$U = '';
$L = '';

foreach ($S as $i => $s) {
    if ($i % 2 == 0) {
        $L .= $s;
    } else {
        $U .= $s;
    }
}

if (strtoupper($U) === $U && strtolower($L) === $L) {
    echo 'Yes';
} else {
    echo 'No';
}
?>
