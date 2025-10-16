<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7 - Operações com Números</title>
</head>

<body>
    <form action="" method="get">
        Primeiro número inteiro: <input type="number" name="num1" step="1" required><br><br>
        Segundo número inteiro: <input type="number" name="num2" step="1" required><br><br>
        Número real: <input type="number" name="num3" step="any" required><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $num3 = $_GET['num3'];

        // a) Produto do dobro do primeiro com metade do segundo
        $resultadoA = (2 * $num1) * ($num2 / 2);

        // b) Soma do triplo do primeiro com o terceiro
        $resultadoB = (3 * $num1) + $num3;

        // c) Terceiro elevado ao cubo
        $resultadoC = pow($num3, 3);

        echo "<h3>Resultados:</h3>";
        echo "a) O produto do dobro do primeiro com metade do segundo é: <strong>$resultadoA</strong><br>";
        echo "b) A soma do triplo do primeiro com o terceiro é: <strong>$resultadoB</strong><br>";
        echo "c) O terceiro número elevado ao cubo é: <strong>$resultadoC</strong>";
    }
    ?>
</body>

</html>