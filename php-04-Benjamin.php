<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Huidige Tijd</title>
    <meta http-equiv="refresh" content="10">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 20%;
        }
        .time {
            font-size: 2em;
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Huidige Tijd</h1>
    <div class="time">
        <?php
        echo date("H:i");
        ?>
    </div>
</body>
</html>
