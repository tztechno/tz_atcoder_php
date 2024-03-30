abc068_b.php
#########################################
#########################################
#########################################
#########################################
<?php
fscanf(STDIN, "%d", $n);
$p = strlen(decbin(intval($n))) - 1;
echo 2 ** $p;
#########################################
<?php
$n = trim(fgets(STDIN));
$cnt = 0;
while(true) {
  if ((1 << $cnt) > $n) {
    break;
  }
  $cnt++;
}
$cnt--;
echo (1 << $cnt);
?>
#########################################
<?php

$n = intval(trim(fgets(STDIN)));

$max_count = 0;
$result = 1;

for ($i = 1; $i <= $n; $i++) {
    $num = $i;
    $count = 0;
    while ($num % 2 == 0) {
        $num /= 2;
        $count++;
    }
    if ($count > $max_count) {
        $max_count = $count;
        $result = $i;
    }
}

echo $result . PHP_EOL;

#########################################
<?php
$n= trim(fgets(STDIN));
$ans=0;
for ($i = 0; $i < $n+1; $i++) {
  if (2**$i<=$n) {
     $ans=2**$i;     
  }
  else {
    break;      
  }
}
echo $ans;
?>
#########################################
