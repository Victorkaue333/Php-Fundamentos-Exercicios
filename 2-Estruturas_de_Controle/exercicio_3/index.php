<?php
//if aninhado
// Receba um salário e:
// - se for maior que 3000
// - se for maior que 5000, mostre "Salário alto"
// - senão, "Salário médio"
//- senão, "Salário baixo"


$salario = 3300;

if($salario > 3000){
    if($salario > 5000){
    echo "Salário alto";
    } else{
    echo "Salário médio";
    }
    } else {
    echo "Salário baixo";
}


?>