//abc093_a.php
####################################
####################################
####################################
####################################
####################################
####################################
<?php
$arr1 = ["a", "b", "c"];
$arr2 = str_split(fgets(STDIN));
if (empty(array_diff($arr1, $arr2))) {
    echo "Yes";
}else{
    echo "No";
}
?>
####################################
<?php
$s = str_split(trim(fgets(STDIN)));
sort($s);
if(implode($s)=="abc") echo "Yes";
else echo "No";
?>
####################################
<?php
fscanf(STDIN,"%s",$s);
$array = str_split($s);
sort($array);
if($array == ["a","b","c"]){
    echo 'Yes';
}else{
    echo 'No';
}
####################################
<?php
$S = trim(fgets(STDIN));
if (strpos($S,"a")+strpos($S,"b")+strpos($S,"c")==3) {
    echo "Yes\n";
} else {
    echo "No\n";
}
?>
####################################
