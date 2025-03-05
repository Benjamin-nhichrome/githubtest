<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /* Reset some default styles for consistency */
        body,
        h1,
        p,
        label,
        select,
        input {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .Headtext {
            color: #333;
        }

        .fieldset1 {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        .Geef.advies {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }

        .Geef.advies:hover {
            background-color: #45a049;
        }

        .geel {
            color: #ffd700;
        }

        .blauw {
            color: #0000ff;
        }
    </style>
</head>

<body>
    <h1 class="Headtext">Voer uw reisinformatie in:</h1>
    <form method="post" action="eindopdracht-resultaat-Benjamin.php">
        <fieldset class="fieldset1">
            <label for="reisafstand">Reisafstand (in kilometers):</label>
            <input type="number" id="reisafstand" name="reisafstand" required>

            <br><br>

            <label for="vertraging">Vertraging door file (in minuten):</label>
            <input type="number" id="vertraging" name="vertraging">
        </fieldset>

        <br><br>

        <fieldset class="fieldset1">
            <label for="snelheid_scooter">Scooter:</label>
            <select name="snelheid_scooter" required="required" id="Kenteken">
                <option selected disabled>Selecteer een scooter</option>
                <option value="45">Geel Kenteken Scooter</option>
                <option value="25">Blauw Kenteken Scooter</option>
            </select>

            <br><br>

            <label for="bandenspanning_scooter">Bandenspanning (in %):</label>
            <input type="number" id="bandenspanning_scooter" name="bandenspanning_scooter" min="0" max="100" required>

            <br><br>

            <p>
                <b class="geel">Geel</b> kenteken gaat 45 km per uur met 100% bandenspanning.
                <br>
                <b class="blauw">Blauw</b> kenteken gaat 25 km per uur met 100% bandenspanning.
            </p>
        </fieldset>

        <br><br>

        <fieldset class="fieldset1">
            <label for="snelheid_fiets">Fiets:</label>
            <select name="snelheid_fiets" required="required">
                <option selected disabled>Selecteer een fiets</option>
                <option value="15">Fiets</option>
                <option value="25">Elektrische Fiets</option>
            </select>

            <br><br>

            <label for="bandenspanning_fiets">Bandenspanning (in %):</label>
            <input type="number" id="bandenspanning_fiets" name="bandenspanning_fiets" min="0" max="100" required>

            <br><br>

            <p>
                Een elektrische fiets gaat 25 km per uur met 100% bandenspanning.
                <br>
                Een normale fiets gaat 15 km per uur met 100% bandenspanning.
            </p>

        </fieldset>

        <br>

        <input type="submit" name="geef_advies" value="Geef advies" class="Geef advies">

    </form>

</body>

</html>
