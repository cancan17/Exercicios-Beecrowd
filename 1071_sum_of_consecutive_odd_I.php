<?php
$x = intval(fgets(STDIN));
$y = intval(fgets(STDIN));

$maior = $x > $y ? $x : $y;
$menor = $y < $x ? $y : $x;
$menor += 1;
$soma = 0;

while ($menor < $maior) {
    if ($menor % 2 != 0) {
        $soma += $menor;
    }
    $menor += 1;
}

echo $soma;
?>