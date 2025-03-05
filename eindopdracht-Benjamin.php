<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boekenlijst</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ffcccc;
        }
    </style>
</head>
<body>

<?php
$boeken = [
    "Harry Potter en de Steen der Wijzen" => ["auteur" => "j.k. rowling", "jaar" => 1997],
    "De Hobbit" => ["auteur" => "J.r.r. Tolkien", "jaar" => 1937],
    "Het spel der tronen" => ["auteur" => "George R.R. martin", "jaar" => 1996],
    "1984" => ["auteur" => "George Orwell", "jaar" => 1949],
    "Moord op de Oriënt-Expres" => ["auteur" => "Agatha Christie", "jaar" => 1934],
    "Moby Dick" => ["auteur" => "herman melville", "jaar" => 1851],
    "Oliver Twist" => ["auteur" => "Charles Dickens", "jaar" => 2023],
    "Kwaku Ananse" => ["auteur" => "Ama Ataa Aidoo", "jaar" => 2023],
];

// Functie om de naam te formatteren
function formatName($naam) {
    return ucwords(strtoupper($naam));
}

?>

<table>
    <tr>
        <th>Titel</th>
        <th>Auteur</th>
        <th>Jaar</th>
    </tr>

    <?php foreach ($boeken as $titel => $boek) : ?>
        <tr>
            <td><?= $titel ?></td>
            <td><?= formatName($boek['auteur']) ?></td>
            <td><?= $boek['jaar'] ?></td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>
