
### $S[strlen($S)-1]

<?php
$S = trim(fgets(STDIN));
if ($S[strlen($S) - 1] == "s") {
    echo $S . "es" . "\n";
} else {
    echo $S . "s" . "\n";
}
?>
