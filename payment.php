abc173_a payment.php
##############################
<?php
fscanf(STDIN,"%d",$N);
if($N%1000 == 0) echo 0;
else echo 1000 - $N%1000;
?>
##############################
<?php
fscanf(STDIN,"%d",$n);
$thou = substr($n,-3);
if($thou==000){
    echo 0;
} else {
    echo 1000-$thou;
}
##############################
<?php
$N = trim(fgets(STDIN));
$A=(1000-$N%1000)%1000;
echo $A;
?>
##############################
