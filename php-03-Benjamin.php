<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops in PHP</title>
    <style>
        .cijfers {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>for-loop:</h1>
    <p>
        <?php
        for ($i = 1; $i <= 20; $i++) {
            echo "<span class='cijfers'>$i</span>";
            if ($i < 20) {
                echo " - ";
            }
        }
        ?>
    </p>

    <h1>while-loop:</h1>
    <p>
        <?php
        $i = 1;
        while ($i <= 20) {
            echo "<span class='cijfers'>$i</span>";
            if ($i < 20) {
                echo " - ";
            }
            $i++;
        }
        ?>
    </p>
</body>
</html>
