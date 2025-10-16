<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - Soma de Dois Números</title>
</head>
<body>
    <form action="" method="get">
        Número 1: <input type="number" name="num1" required step="any"><br><br>
        Número 2: <input type="number" name="num2" required step="any"><br><br>
        <input type="submit" value="Somar">
    </form>

    <?php
    if (isset($_GET['num1']) && isset($_GET['num2'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $soma = $num1 + $num2;

        echo "<h3>A soma de $num1 + $num2 é igual a $soma.</h3>";
    }
    ?>
</body>
</html>
