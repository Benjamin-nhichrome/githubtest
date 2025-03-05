<?php

class Auto {
    public $merk;
    public $kleur;
    public $type;
    public $uitvoering;
    public $brandstof;

    
    public function __construct($merk, $kleur, $type, $uitvoering, $brandstof) {
        $this->merk = $merk;
        $this->kleur = $kleur;
        $this->type = $type;
        $this->uitvoering = $uitvoering;
        $this->brandstof = $brandstof;
    }
}


$auto = new Auto("Volkswagen", "rood", "Golf", "station", "benzine");


echo "Merk: " . $auto->merk . "<br>";
echo "Kleur: " . $auto->kleur . "<br>";
echo "Type: " . $auto->type . "<br>";
echo "Uitvoering: " . $auto->uitvoering . "<br>";
echo "Brandstof: " . $auto->brandstof . "<br>";

?>

