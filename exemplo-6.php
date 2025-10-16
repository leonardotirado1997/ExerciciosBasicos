<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6 - Salário Mensal</title>
</head>
<body>
    <form action="" method="get">
        Quanto você ganha por hora (R$): <input type="number" name="valorHora" step="any" required><br><br>
        Quantas horas trabalhou no mês: <input type="number" name="horas" step="any" required><br><br>
        <input type="submit" value="Calcular Salário">
    </form>

    <?php
    if (isset($_GET['valorHora']) && isset($_GET['horas'])) {
        $valorHora = $_GET['valorHora'];
        $horas = $_GET['horas'];
        $salario = $valorHora * $horas;

        echo "<h3>Seu salário neste mês é: R$ " . number_format($salario, 2, ',', '.') . "</h3>";
    }
    ?>
</body>
</html>
