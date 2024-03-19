<?php
$n1 = intval(fgets(STDIN));
$n2 = intval(fgets(STDIN));
$t = $n1;
if ($n1 > $n2) {
    $n1 = $n2;
    $n2 = $t;
}
while ($n1 < $n2) {
    $n1 += 1;
    if (($n1 % 5 == 2 || $n1 % 5 == 3) && $n1 != $n2) {
        echo $n1 . "\n";
    }
}
?>
