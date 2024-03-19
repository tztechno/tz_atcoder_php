
//abc094_a.php
####################################
list($A,$B,$C) = explode(' ',trim(fgets(STDIN)));
list($A,$B,$C) = array_map('intval', explode(' ', $input));
[$a,$b,$x] = array_map('intval', explode(' ', trim(fgets(STDIN))));
fscanf(STDIN, "%d %d %d",  $a, $b, $c);
####################################
####################################
####################################
####################################
####################################
<?php
[$a,$b,$x] = array_map('intval', explode(' ', trim(fgets(STDIN))));
//[$n] = array_map('intval', explode(' ', trim(fgets(STDIN))));
//$a = array_map('intval', explode(' ', trim(fgets(STDIN))));
//[$s,$t] = explode(' ', trim(fgets(STDIN)));
//[$s] = explode(' ', trim(fgets(STDIN)));
//$s = explode(' ', trim(fgets(STDIN)));
//function decr($v){return --$v;}
//$alpha='abcdefghijklmnopqrstuvwxyz';
//$mod=1000000009;
//$mod=1000000007;
//$mod=998244353;

if($x < $a || $a+$b < $x){
    echo "NO";
}else{
    echo "YES";
}
####################################
<?php
fscanf(STDIN,"%d %d %d",$a,$b,$x);
if($a > $x){
    echo 'NO';
}elseif($a + $b < $x){
    echo 'NO';
}elseif($a + $b >= $x){
    echo 'YES';
}
####################################
<?php
fscanf(STDIN,"%d%d%d",$a,$b,$c);
if($a>$c || $a+$b<$c) echo "NO" . PHP_EOL;
else echo "YES" . PHP_EOL;

?>
####################################
<?php
  fscanf(STDIN, "%d %d %d",  $a, $b, $x);
  echo $a<=$x & $x<=$a+$b ? "YES" : "NO";
?>
####################################
