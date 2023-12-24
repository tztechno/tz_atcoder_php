#ABC329_B
#next

?php

$N = intval(trim(fgets(STDIN)));
$A = array_map('intval', explode(' ', trim(fgets(STDIN))));
$B = array_unique($A);
rsort($B);
echo $B[1] . PHP_EOL;

?>
