<?php
//Dado o valor de um produto, aplique um desconto de 10% e mostre:
//valor original
//valor do desconto
//valor final

$valorProduto = 100;
$desconto = 0.10;//é equivalente a 10%

//Operações necessárias para saber o valor do desconto e o valor final do produto
$valorDesconto = $valorProduto * $desconto;
$valorFinal = $valorProduto - $valorDesconto;

//Valores exibidos na tela
echo "O valor original é: ".$valorProduto."<br>";
echo "O valor do desconto é: ".$valorDesconto. "<br>";
echo "O valor final é: ".$valorFinal."<br>";

?>