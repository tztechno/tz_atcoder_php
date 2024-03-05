//abc168_a.php
################################
<?php
$N= trim(fgets(STDIN));
if ($N%10 ==3){
echo "bon\n";    
}else if($N%10 ==0 or $N%10 ==1 or $N%10 ==6 or $N%10 ==8)  {
echo"pon\n";    
}else{
echo "hon\n";
}
?>
################################
<?php
    $N = trim(fgets(STDIN));
    $L = ($N%100)%10;
    if($L=='3') echo "bon" . PHP_EOL;
    else if($L=='0' || $L=='1' || $L=='6' || $L=='8' ) echo "pon" . PHP_EOL;
    else echo "hon" . PHP_EOL;
?>
################################
<?php
    $n = trim(fgets(STDIN));
    $n %= 10;
    if ($n == 3) {
        echo 'bon';
    } elseif ($n == 0 || $n == 1 || $n == 6 || $n == 8) {
        echo 'pon';
    } else {
        echo 'hon';
    }
?>
################################
<?php
    $S = intval(trim(fgets(STDIN)));
    $a = $S % 10;
    if (in_array($a, [2, 4, 5, 7, 9])) {
        $ans = "hon";
    } else if (in_array($a, [0, 1, 6, 8])) {
        $ans = "pon";
    } else {
        $ans = "bon";
    }
    echo $ans . PHP_EOL;
?>
################################
