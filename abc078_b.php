abc078_b.php
#################################
#################################
#################################
<?php
list($X,$Y,$Z) = explode(' ',trim(fgets(STDIN)));
$X = $X - $Z;
echo floor($X / ($Y + $Z));
#################################
<?php
[$x,$y,$z] = array_map('intval',explode(" ", trim(fgets(STDIN))));
echo floor(($x-$z) / ($y+$z)) . PHP_EOL;
#################################
<?php
fscanf(STDIN, "%d %d %d", $X,$Y,$Z);
echo floor(($X-$Z)/($Y+$Z));
#################################
[python]
X,Y,Z=map(int,input().split())
print((X-Z)//(Y+Z))
#################################
