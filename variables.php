abc170_a variables.php
#####################################
<?php
  fscanf(STDIN, "%d %d %d %d %d", $a, $b, $c, $d, $e);
  $n = array($a, $b, $c, $d, $e);
  foreach($n as $key => $value){
      if($value === 0){
          echo $key+1;
      }
  }
?>
#####################################
<?php
    $x = explode(" ",trim(fgets(STDIN)));
    for($i=1; $i<=5; $i++) {
        if($x[$i-1]==0) echo $i . PHP_EOL;
    }
?>
#####################################
<?php
$input = rtrim(fgets(STDIN));
$X = array_map('intval', explode(' ', $input));

foreach ($X as $key => $value) {   
    if ($value == 0) {        
        echo $key + 1 . "\n";
    }
}
?>
#####################################
<?php
$input = rtrim(fgets(STDIN));
$X = array_map('intval', explode(' ', $input));
for ($i = 0; $i < 5; $i++) {      
    if ($X[$i] == 0) {        
        echo $i+1 . "\n";
    }
}
?>
#####################################
