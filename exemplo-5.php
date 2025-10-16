<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5 - Área do Quadrado</title>
</head>
<body>
    <form action="" method="get">
        Informe o lado do quadrado (em metros): <input type="number" name="lado" step="any" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if (isset($_GET['lado'])) {
        $lado = $_GET['lado'];
        $area = $lado * $lado;
        $dobro = $area * 2;

        echo "<h3>Área do quadrado: $area m²<br>Dobro da área: $dobro m²</h3>";
    }
    ?>
</body>
</html>
