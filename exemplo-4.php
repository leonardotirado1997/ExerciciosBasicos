<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4 - Metros para Centímetros</title>
</head>
<body>
    <form action="" method="get">
        Digite o valor em metros: <input type="number" name="metros" step="any" required>
        <input type="submit" value="Converter">
    </form>

    <?php
    if (isset($_GET['metros'])) {
        $metros = $_GET['metros'];
        $centimetros = $metros * 100;
        echo "<h3>$metros metro(s) equivalem a $centimetros centímetro(s).</h3>";
    }
    ?>
</body>
</html>
