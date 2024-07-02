abc081_b.php
##########################################
##########################################
##########################################
##########################################
##########################################
##########################################
<?php
  fscanf(STDIN, "%d", $n);
  $l = explode(' ', fgets(STDIN));
  $c = 0;
  do {
    for ($i = 0; $i < $n; $i++) {
      $v = intval($l[$i]);
      if ($v % 2 == 1) {
        break;
      }
      $l[$i] = $v / 2;
    }
    if ($i == $n) $c++;
  } while ($i == $n);
  echo $c;
?>
##########################################
[after fix: AC]
<?php
$N = intval(trim(fgets(STDIN)));
$A = array_map('intval', explode(' ', trim(fgets(STDIN))));
$B = $A;
for ($i=0; $i < $N*10; $i++) { 
    for ($j=0; $j < $N; $j++) { 
        $bj=$B[$j];
        if ($bj%2==0) {
            $B[$j]=$bj/2;            
        } else {
            echo $i . PHP_EOL;
            exit();            
        }
      }
    }
?>
##########################################
[before fix]
<?php
$N = intval(trim(fgets(STDIN)));
$A = array_map('intval', explode(' ', trim(fgets(STDIN))));
$B = $A;
for ($i=0; $i < $N*10; $i++) { 
    for ($j=0; $j < $N; $j++) { 
        $bj=$B[j];
        if ($bj%2==0) {
            $B[j]=$bj//2;            
        } else {
            echo $i . PHP_EOL;
            exit()            
        }
      }
    }
?>
##########################################
[python]
N=int(input())
A=list(map(int,input().split()))
B=A
for i in range(N*10):
  for j in range(N):
    bj=B[j]
    if bj%2==0:
        B[j]=bj//2
    else:
        print(i)
        exit()
##########################################
