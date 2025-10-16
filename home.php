<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>

<body>
    <form action="home.php" method="get">
        Raio: <input type="number" name="num1">
        <br><br>
        <input type="submit">
    </form>

    <?php
    if (isset($_GET['num1'])) {
        $raio = $_GET['num1'];
        echo "Raio: $raio<br>";
        echo "Perímetro: " . (2 * M_PI * $raio) . "<br>";
        echo "Área: " . (M_PI * pow($raio, 2)) . "<br>";
    }
    ?>
</body>

</html>