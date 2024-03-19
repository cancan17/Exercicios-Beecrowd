<?php
while ($n = fgets(STDIN)) {
    $n = intval($n);
    $vetor = explode(" ", trim(fgets(STDIN)));
    $maior = max($vetor);

    if ($maior < 10) {
        echo "1\n";
    } else if ($maior >= 10 && $maior < 20) {
        echo "2\n";
    } else if ($maior >= 20) {
        echo "3\n";
    }
}
?>