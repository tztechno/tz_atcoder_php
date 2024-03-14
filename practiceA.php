//practiceA.php
##################################
1
2 3
test
##################################
fscanf(STDIN,"%d",$a);
$a = trim(fgets(STDIN));
##################################
##################################
##################################
##################################
##################################
##################################
<?php
fscanf(STDIN, "%d", $a);
fscanf(STDIN, "%d %d", $b, $c);
fscanf(STDIN, "%s", $s);
echo $a+$b+$c." ".$s."\n";
?>
##################################
<?php
$a = trim(fgets(STDIN));
list($b, $c) = explode(' ', trim(fgets(STDIN)));
$s = trim(fgets(STDIN));
echo $a+$b+$c . ' ' . $s;
##################################
<?php
fscanf(STDIN, "%d", $a);
fscanf(STDIN, "%d %d", $b, $c);
fscanf(STDIN, "%s", $s);
echo ($a+$b+$c)." ".$s
?>
##################################
<?php

function strings() {return explode(" ", trim(fgets(STDIN)));}
function ints() {return array_map("intval", strings());}

list($a)=ints();
list($b, $c)=ints();
list($d)=strings();

echo $a + $b + $c . " " .$d;

##################################
<?php

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {

	list($a)     = ints();    
	list($b, $c) = ints();    
	list($s)     = strings();

	output($a + $b + $c, $s); 
}

main();
##################################
