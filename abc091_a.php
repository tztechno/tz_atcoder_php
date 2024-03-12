//abc091_a.php
################################
list($A,$B,$C) = explode(' ',trim(fgets(STDIN)));
list($A,$B,$C) = array_map('intval', explode(' ', $input));
fscanf(STDIN, "%d %d %d",  $a, $b, $c);
################################
################################
################################
################################
<?php
  list($a,$b,$c) = explode(" ",trim(fgets(STDIN)));
  echo $a+$b >= $c ? "Yes" : "No";
################################
 <?php 
fscanf(STDIN, "%d %d %d", $A, $B, $C);
if ($A + $B >= $C){
echo"Yes";
} else {
echo "No";
}
?> 
################################
<?php
    fscanf(STDIN, "%d %d %d",  $a, $b, $c);
    if($a + $b >= $c){
        echo "Yes";
    }else{
        echo "No";
    }
################################
<?php
    list($A,$B,$C) = explode(' ',trim(fgets(STDIN)));
    if($A + $B >= $C){
        echo 'Yes';
    }else{
        echo 'No';
    }
################################
<?php
$input = rtrim(fgets(STDIN));
list($A,$B,$C) = array_map('intval', explode(' ', $input));
if ($A+$B>=$C) {
echo "Yes". "\n";    
}
else {
echo "No". "\n";    
}
?>
################################
