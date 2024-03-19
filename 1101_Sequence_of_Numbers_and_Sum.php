<?php
$soma = 0;
$j = 0;
while ($j != 1) {
    fscanf(STDIN, "%d %d\n", $M, $N);
    $soma = 0;
    if ($M > $N) {
        $aux = $M;
        $M = $N;
        $N = $aux;
    }
    if ($M <= 0 || $N <= 0) {
        $j = 1;
    }
    if ($j != 1) {
        for ($i = $M; $i <= $N; $i++) {
            echo "$i ";
            $soma += $i;
            if ($i == $N) {
                echo "Sum=$soma\n";
            }
        }
    }
}
?>