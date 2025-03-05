<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vermenigvuldig</title>
</head>
<body>
    <h1>Vermenigvuldig</h1>
    <form action="" method="get">
        <label for="num1">Getal 1:</label>
        <input type="number" id="num1" name="num1" required>
        <br><br>
        <label for="num2">Getal 2:</label>
        <input type="number" id="num2" name="num2" required>
        <br><br>
        <input type="submit" value="Bereken">
    </form>

    <?php
    if (isset($_GET['num1']) && isset($_GET['num2'])) {
        $num1 = (int)$_GET['num1'];
        $num2 = (int)$_GET['num2'];
        $result = $num1 * $num2;
        echo "$num1 * $num2 = $result";
    }
    ?>
</body>
</html>
