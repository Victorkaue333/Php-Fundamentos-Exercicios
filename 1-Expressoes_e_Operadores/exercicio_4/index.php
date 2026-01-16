<?php
//Crie duas variáveis numéricas e utilize operadores de comparação (>, <, ==, !=) para verificar:
// - qual é maior
// - se são iguais
// - se são diferentes

$num1 = 5;
$num2 = 4;

// Qual é maior
if($num1 > $num2){
    echo"o número ".$num1. " é maior que o número ".$num2. "<br>";
}else if($num2 > $num1){
    echo"o número ".$num2. " é maior que o número ".$num1. "<br>";
}

// Se são iguais
if($num1 == $num2){
    echo "o número ".$num1. " é igual ao número ".$num2. "<br>";
}

// Se são diferentes
if($num1 != $num2){
    echo"o número ".$num1. " é diferente do número ".$num2. "<br>";
}

?>