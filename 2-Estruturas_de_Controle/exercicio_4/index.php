<?php
//  Condição composta
//  Receba dois números e:
// - se ambos forem positivos, exiba "Ambos positivos"
// - se apenas um for positivo, "Um positivo" - se nenhum for positivo, "Nenhum positivo"

$num1 = 2;
$num2 = 3;

if ($num1 > 0 && $num2 > 0) {
    echo "Ambos positivos";
} elseif (($num1 > 0 && $num2 <= 0) || ($num1 <= 0 && $num2 > 0)) {
    echo "Um positivo";
} else {
    echo "Nenhum positivo";
}

?>