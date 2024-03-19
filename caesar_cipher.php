<?php
$letras = range('A', 'Z');

$n = intval(fgets(STDIN));

for ($nIndex = 0; $nIndex < $n; $nIndex++) {
    $texto = trim(fgets(STDIN));
    $novoTexto = "";
    $nEsquerda = intval(fgets(STDIN));

    for ($i = 0; $i < strlen($texto); $i++) {
        $letra = $texto[$i];
        $novoTexto .= $letras[(array_search($letra, $letras) - $nEsquerda + 26) % 26];
    }

    echo $novoTexto . "\n";
}
?>
