<?php
fscanf(STDIN, '%s', $str);
for ($i=0; $i < strlen($str); $i++) { 
    if($i % 2 === 0) echo $str[$i];
}
