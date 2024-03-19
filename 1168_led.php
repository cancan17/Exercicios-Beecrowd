<?php
$tabela = array(6,2,5,5,4,5,6,3,7,6);
$n = intval(fgets(STDIN));

for ($l = 0; $l < $n; $l++) {
    $total = 0;
    $valor = trim(fgets(STDIN));
    for ($i = 0; $i < strlen($valor); $i++) {
        $v = $valor[$i];
        $total += $tabela[intval($v)];
    }
    echo "$total leds\n";
}
?>
