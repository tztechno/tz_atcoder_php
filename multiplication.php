//abc169_a multiplication.php
################################
################################
<?php
fscanf(STDIN, "%d %d", $A, $B);
echo $A * $B;
################################
<?php
  fscanf(STDIN, "%d %d", $A, $B);
  $result = $A * $B;
  echo $result;
?>
################################
<?php
$arr = explode(' ',readline());
echo (int)($arr[0]*$arr[1]);
?>
################################
<?php
$input = rtrim(fgets(STDIN));
list($A,$B) = array_map('intval', explode(' ', $input));
echo intval($A*$B) . "\n";
?>
################################
