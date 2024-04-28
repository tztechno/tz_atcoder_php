abc076_b.php
##############################################
##############################################
##############################################
<?php

$n = trim(fgets(STDIN));
$k = trim(fgets(STDIN));

$sum = 1;
for($i=0; $i<$n; $i++){
    $a = $sum * 2;
    $b = $sum + $k;
    $sum = min($a, $b);
}

echo $sum;
##############################################
<?php
fscanf(STDIN,"%d",$n);
fscanf(STDIN,"%d",$k);
$C=1;
for($i=0;$i<$n;$i++){
    if($C*2<$C+$k){
        $C *= 2;
    }else{
        $C += $k;
    }
}
echo $C;
##############################################
<?php

$n = trim(fgets(STDIN));
$k = trim(fgets(STDIN));
$a = 1;
for ($i = 0; $i < $n; $i++) {
    $a=min($a*2,$a+$k)
}
echo $a;
##############################################
[python]
N=int(input())
K=int(input())
A=1
for i in range(N):
  A=min(A*2,A+K)
print(A)
##############################################
