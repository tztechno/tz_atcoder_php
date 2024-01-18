//abc174_a conditioner.php

####################################
<?php
$X = trim(fgets(STDIN));
if ($X >= 30){
  echo "Yes\n";  
}else{
  echo "No\n";
}
?>
####################################
<?php
$X = intval(trim(fgets(STDIN)));
if ($X>=30) {
   echo 'Yes'.PHP_EOL;    
} else {
   echo 'No'.PHP_EOL;    
}
?>
####################################
<?php
$X = intval(trim(fgets(STDIN)));
$judge = (int)($X >= 30);
$ANS = ['No', 'Yes'];
echo $ANS[$judge] . PHP_EOL;
?>
####################################
