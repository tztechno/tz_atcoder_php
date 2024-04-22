abc074_b.php
#######################################
#######################################
#######################################
#######################################
#######################################
<?php
fscanf(STDIN,"%d",$n);
fscanf(STDIN,"%d",$k);
$x = explode(" ",trim(fgets(STDIN)));
$M = 0;
for($i = 0; $i < $n; $i++){
    $M += min(2*$x[$i],2*abs($k-$x[$i]));
}
echo $M;
#######################################
<?php

fscanf(STDIN, '%d', $N);
fscanf(STDIN, '%d', $K);
$xs = array_map('intval', explode(' ', fgets(STDIN)));

$ans = 0;
foreach ($xs as $x) {
    $ans += min($x, $K - $x) * 2;
}
echo $ans . "\n";

#######################################
<?php
fscanf(STDIN,"%d",$N);
fscanf(STDIN,"%d",$K);
$X = array_map('intval', explode(' ', trim(fgets(STDIN))));
$ans = 0;
for ($i=0; $i < $N; $i++) { 
  $ans+=min($X[$i],$K-$X[$i])*2;
}
echo $ans;
?>
#######################################
