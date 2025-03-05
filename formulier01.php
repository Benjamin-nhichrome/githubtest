<?php

// code van Benjamin

$countries = array(
    "Albanië",
    "België",
    "Kroatië",
    "Tsjechië",
    "Denemarken",
    "Engeland",
    "Finland",
    "Frankrijk",
    "Duitsland",
    "Hongarije",
    "Italië",
    "Nederland",
    "Noord-Macedonië",
    "Noorwegen",
    "Polen",
    "Portugal",
    "Roemenië",
    "Schotland",
    "Servië",
    "Slovenië",
    "Spanje",
    "Zwitserland",
    "Turkije",
    "Oekraïne"
);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EK 2024 Landen Dropdown</title>
</head>
<body>
    <h1>EK 2024 Landen</h1>
    <form>
        <label for="landen">Kies een land:</label>
        <select id="landen" name="landen">
           
            <?php foreach ($countries as $country): ?>
                <option value="<?php echo htmlspecialchars($country); ?>"><?php echo htmlspecialchars($country); ?></option>
                <?php endforeach; ?>
                 <input type="submit" value="Submit">
        </select>
    </form>
</body>
</html>

