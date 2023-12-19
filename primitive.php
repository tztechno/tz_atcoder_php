<?php

$input = rtrim(fgets(STDIN));
list($A,$B,$C) = array_map('intval', explode(' ', $input));

if ($C==0) {
  if ($A<=$B){
    echo "Aoki". "\n";    
  } else {
    echo "Takahashi". "\n";     
  }}
else {
  if ($B<=$A) {
    echo "Takahashi". "\n";     
  } else {
    echo "Aoki". "\n";    
  }}    

?>
