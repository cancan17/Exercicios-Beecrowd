<?php
$valor = intval(fgets(STDIN));
$valorin = $valor;

$nota100 = intdiv($valor, 100);
$valor = $valor % 100;
$nota50 = intdiv($valor, 50);
$valor = $valor % 50;
$nota20 = intdiv($valor, 20);
$valor = $valor % 20;
$nota10 = intdiv($valor, 10);
$valor = $valor % 10;
$nota5 = intdiv($valor, 5);
$valor = $valor % 5;
$nota2 = intdiv($valor, 2);
$valor = $valor % 2;
$nota1 = $valor;

echo "$valorin\n";
echo "$nota100 nota(s) de R$ 100,00\n";
echo "$nota50 nota(s) de R$ 50,00\n";
echo "$nota20 nota(s) de R$ 20,00\n";
echo "$nota10 nota(s) de R$ 10,00\n";
echo "$nota5 nota(s) de R$ 5,00\n";
echo "$nota2 nota(s) de R$ 2,00\n";
echo "$nota1 nota(s) de R$ 1,00\n";
?>
