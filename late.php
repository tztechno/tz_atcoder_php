//ABC177_A late

<?php
list($D,$T,$S) = explode(' ', trim(fgets(STDIN)));
if ($D/$S <= $T) {
    echo "Yes" . PHP_EOL;
} else {
    echo "No" . PHP_EOL;        
}
?>
