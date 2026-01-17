<?php
// Receba uma nota (0 a 10) e exiba:
// - Aprovado (nota ≥ 7)
// - Recuperação (nota ≥ 5) 
// - Reprovado (nota < 5)


$nota = 3;

// Estrutura de controle
if($nota >= 7 ){
    echo "Aprovado";
}else if($nota >= 5){
    echo "Recuperação";
}else {
    echo "Reprovado";
}

?>