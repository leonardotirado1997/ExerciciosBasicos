<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício - Mostrar Número</title>
</head>

<body>
    <form action="" method="get">
        Digite um número: <input type="number" name="numero" required>
        <br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if (isset($_GET['numero'])) {
        $numero = $_GET['numero'];
        echo "<h3>O número informado foi: $numero</h3>";
    }
    ?>
</body>

</html>