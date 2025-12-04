<?php

include_once 'computador.php';
include_once 'calculadora.php';

echo "Inicializando as classes...";
echo '<br>';
$pc = new computador();
$calc = new calculadora(10,8);

echo "O resultado da soma de 10 + 5 é: ";
echo $calc->soma(10, 5);
echo '<br>';
echo "O resultado da subtração de 10 - 8 é: ";
echo $calc->subtrai();
echo '<br>';
echo "O resultado da multiplicação de 10 * 5 é: ";
echo $calc->multiplica(10, 5);
echo '<br>';
echo "O resultado da divisão de 10 / 5 é: ";
echo $calc->divide(10, 5);
echo '<br>';

echo "O status do computador é: ";
echo $pc->status();
echo '<br>';
echo "Desligando o computador...";
$pc->desligar();
echo '<br>';
echo "O status do computador é: ";
echo $pc->status();
echo '<br>';


?>