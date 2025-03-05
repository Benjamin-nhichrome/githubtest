<?php

class Dier {
    public $soort;
    public $leeftijd;
    public $gewicht;
    public $geluid;

    public function __construct($soort, $leeftijd, $gewicht, $geluid) {
        $this->soort = $soort;
        $this->leeftijd = $leeftijd;
        $this->gewicht = $gewicht;
        $this->geluid = $geluid;
    }
}

class Vogel extends Dier {
    public $vleugelspanwijdte;
    public $verenkleur;

    public function __construct($soort, $leeftijd, $gewicht, $geluid, $vleugelspanwijdte, $verenkleur) {
        parent::__construct($soort, $leeftijd, $gewicht, $geluid);
        $this->vleugelspanwijdte = $vleugelspanwijdte;
        $this->verenkleur = $verenkleur;
    }
}

class Vis extends Dier {
    public $watertype;
    public $schubkleur;

    public function __construct($soort, $leeftijd, $gewicht, $geluid, $watertype, $schubkleur) {
        parent::__construct($soort, $leeftijd, $gewicht, $geluid);
        $this->watertype = $watertype;
        $this->schubkleur = $schubkleur;
    }
}

$papegaai = new Vogel("Papegaai", 5, "1 kg", "Kraa", "30 cm", "Groen");
$duif = new Vogel("Duif", 2, "0.5 kg", "Koer", "25 cm", "Grijs");

$goudvis = new Vis("Goudvis", 1, "0.1 kg", "Blub", "Zoetwater", "Oranje");
$koiKarper = new Vis("Koi Karper", 3, "2 kg", "Blub-blub", "Vijver", "Veelkleurig");

echo "Papegaai:<br>";
echo "Soort: " . $papegaai->soort . "<br>";
echo "Leeftijd: " . $papegaai->leeftijd . " jaar<br>";
echo "Gewicht: " . $papegaai->gewicht . "<br>";
echo "Geluid: " . $papegaai->geluid . "<br>";
echo "Vleugelspanwijdte: " . $papegaai->vleugelspanwijdte . "<br>";
echo "Verenkleur: " . $papegaai->verenkleur . "<br><br>";

echo "Duif:<br>";
echo "Soort: " . $duif->soort . "<br>";
echo "Leeftijd: " . $duif->leeftijd . " jaar<br>";
echo "Gewicht: " . $duif->gewicht . "<br>";
echo "Geluid: " . $duif->geluid . "<br>";
echo "Vleugelspanwijdte: " . $duif->vleugelspanwijdte . "<br>";
echo "Verenkleur: " . $duif->verenkleur . "<br><br>";

echo "Goudvis:<br>";
echo "Soort: " . $goudvis->soort . "<br>";
echo "Leeftijd: " . $goudvis->leeftijd . " jaar<br>";
echo "Gewicht: " . $goudvis->gewicht . "<br>";
echo "Geluid: " . $goudvis->geluid . "<br>";
echo "Watertype: " . $goudvis->watertype . "<br>";
echo "Schubkleur: " . $goudvis->schubkleur . "<br><br>";

echo "Koi Karper:<br>";
echo "Soort: " . $koiKarper->soort . "<br>";
echo "Leeftijd: " . $koiKarper->leeftijd . " jaar<br>";
echo "Gewicht: " . $koiKarper->gewicht . "<br>";
echo "Geluid: " . $koiKarper->geluid . "<br>";
echo "Watertype: " . $koiKarper->watertype . "<br>";
echo "Schubkleur: " . $koiKarper->schubkleur . "<br>";

?>
