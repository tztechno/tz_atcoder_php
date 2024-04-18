abc073_b.php
#######################################
#######################################
#######################################
#######################################
<?php
fscanf(STDIN,"%d",$N);
$ans = 0;
for($i=0;$i<$N;++$i){
    fscanf(STDIN,"%d%d",$l,$r);
    $ans += $r-$l+1;
}
echo $ans;
?>
#######################################
<?php

$N = fgets(STDIN);
$sum = 0;
for($i = 0 ; $i<$N ; $i++){
  [$l,$r] = explode(" ",fgets(STDIN));
  $sum += $r-$l;
}
echo $sum + $N . PHP_EOL;
#######################################
<?php
$N = fgets(STDIN);
$sum = 0;
for($i = 0 ; $i<$N ; $i++){
  $rl = explode(" ",fgets(STDIN));
  $r=(int)$rl[0];
  $l=(int)$rl[1];
  $sum += $l-$r;
}
echo $sum + $N . PHP_EOL;
#######################################
<?php
$N = intval(trim(fgets(STDIN)));
$t=0;
for ($i = 0; $i < $N; $i += 1) {
    $A = array_map('intval', explode(' ', trim(fgets(STDIN))));
    $l = $A[0];
    $r = $A[1];
    $t += $r-$l+1;  
}
echo $t . PHP_EOL;
?>
#######################################
