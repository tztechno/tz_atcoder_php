abc080_b.php
##########################################
##########################################
##########################################
##########################################
##########################################
<?php
fscanf(STDIN, "%s", $X);
$M = 0;

// Loop through each character in the string
for ($i = 0; $i < strlen($X); $i++) {
    $M += intval($X[$i]);
}

// Check if the integer value of X is divisible by the sum of its digits
if (intval($X) % $M == 0) {
    echo "Yes";
} else {
    echo "No";
}
?>
##########################################
[after,AC]
<?php
fscanf(STDIN, "%s", $X);
$M = 0;
for ($i = 0; $i < strlen($X); $i++) {
    $M += intval($X[$i]);
}
if (intval($X) % $M == 0) {
    echo "Yes";
} else {
    echo "No";
}
?>
##########################################
[before,error]
<?php
fscanf(STDIN, "%s", $X);
$M=0;
for (x in list($X)){
    $M+=int(x);    
}
if (int($X)%$M==0){
  echo "Yes";    
} else {
echo "No";    
}
##########################################
[python]
X=str(input())
M=0
for x in list(X):
  M+=int(x)
if int(X)%M==0:
  print('Yes')
else:
  print('No')
##########################################
