abc069_b.php
#########################################
#########################################
#########################################
#########################################
#########################################
<?php
$input = trim(fgets(STDIN));
$array = str_split($input);
$initial = array_shift($array);
$last = array_pop($array);
$string = count($array);
echo $initial . $string . $last;
#########################################
<?php
$s = trim(fgets(STDIN));
$ans = substr($s, 0, 1) . strval(strlen($s)-2) . substr($s, -1, 1);
print_r( $ans );
?>
#########################################
<?php
$s=trim(fgets(STDIN));
$len=strlen($s);
echo substr($s,0,1) . $len-2 . substr($s,$len-1,1);
?>
#########################################
<?php
$x = trim(fgets(STDIN));
$n = strlen($x);
echo $x[0],$n-2,$x[$n-1];
#########################################
