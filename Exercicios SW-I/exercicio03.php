<?php
$num1 = 25;
$num2 = 30;

$soma = $num1;
$soma += $num2;

$subtracao = $num1;
$subtracao -= $num2;

$multiplicacao = $num1;
$multiplicacao *= $num2;

$divisao = $num1;
$divisao /= $num2;

$resto = $num1;
$resto %= $num2;

echo "Soma: $soma";
echo "Subtração: $subtracao ";
echo "Multiplicação: $multiplicacao";
echo "Divisão: " . number_format($divisao, 2, ',', '.');
echo "Resto da divisão: $resto";
?>