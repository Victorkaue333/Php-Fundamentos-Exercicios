
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h2>Escolha uma das opções abaixo:</h2>
    <ul>
        <li>1 → Soma</li>
        <li>2 → Subtração</li>
        <li>3 → Multiplicação</li>
        <li>4 → Divisão</li>
        <li>5 → Sair</li>
    </ul>

    <form method="POST">
        <label>Digite a opção desejada:</label>
        <input type="number" name="opcao" min="1" max="5" required><br><br>
        
        <label>Digite o primeiro número:</label>
        <input type="number" step="any" name="num1"><br><br>
        
        <label>Digite o segundo número:</label>
        <input type="number" step="any" name="num2"><br><br>
        
        <button type="submit">Calcular</button>
    </form>

    <?php
    // Crie um menu com opções:
    //  1 → Soma 
    //  2 → Subtração
    // 3 → Multiplicação 
    // 4 → Divisão
    // 5 → Sair
    // Receba a opção e dois números, execute a operação escolhida e mostre o resultado.


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $opcao = $_POST['opcao'];
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        echo "<h3>Resultado:</h3>";

        switch ($opcao) {
            case 1:
                $resultado = $num1 + $num2;
                echo "O resultado da soma é: " . $resultado;
                break;
            case 2:
                $resultado = $num1 - $num2;
                echo "O resultado da subtração é: " . $resultado;
                break;
            case 3:
                $resultado = $num1 * $num2;
                echo "O resultado da multiplicação é: " . $resultado;
                break;
            case 4:
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                    echo "O resultado da divisão é: " . $resultado;
                } else {
                    echo "Erro: Divisão por zero não é permitida.";
                }
                break;
            case 5:
                echo "Saindo do programa...";
                break;
            default:
                echo "Opção inválida. Por favor, escolha uma opção entre 1 e 5.";
                break;
        }
    }
    ?>
</body>
</html>