<?php
$qte = intval(fgets(STDIN));

for ($i = 0; $i < $qte; $i++) {
    $texto = trim(fgets(STDIN));
    $texto_new = '';

    for ($j = 0; $j < strlen($texto); $j++) {
        $l = $texto[$j];
        if (preg_match("/[a-zA-Z]/", $l)) {
            $texto_new .= chr(ord($l)+3);
        } else {
            $texto_new .= $l;
        }
    }

    $texto_new = strrev($texto_new);
    $meio = intdiv(strlen($texto_new), 2);
    $metade1 = substr($texto_new, 0, $meio);
    $metade2 = substr($texto_new, $meio);
    $metade_new = '';

    for ($j = 0; $j < strlen($metade2); $j++) {
        $l = $metade2[$j];
        $metade_new .= chr(ord($l)-1);
    }

    $texto_final = $metade1 . $metade_new;

    echo $texto_final . "\n";
}
?>
