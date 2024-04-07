abc070_b.php
##############################
##############################
##############################
##############################
##############################
##############################
<?php

[$A,$B,$C,$D] = array_map('intval',explode(" ", trim(fgets(STDIN))));

$range1 = [$A,$B];
$range2 = [$C,$D];
$range = [$range1,$range2];
usort($range, function ($a,$b) {
    if ($a[0] === $b[0]) {
        return $a[1] < $b[1] ? -1 : 1;
    }
    return $a[0] < $b[0] ? -1 : 1;
} );

// var_dump($range);
if ($range[0][1] >= $range[1][0]) {
    // 重なる
    if ($range[0][1] >= $range[1][1]) {
        echo ($range[1][1] - $range[1][0]) . PHP_EOL;
    } else {
        echo ($range[0][1]  - $range[1][0]) . PHP_EOL;
    }
} else {
    echo '0' . PHP_EOL;
}
##############################
<?php
fscanf(STDIN, '%d %d %d %d', $A,$B,$C,$D);
$ans = min($D,$B) - max($A,$C);
echo max(0,$ans);
##############################
<?php
    fscanf(STDIN, "%d %d %d %d",  $a, $b, $c, $d);
    $t=max(min($b,$d)-max($a,$c),0);
    echo $t. PHP_EOL;
##############################
