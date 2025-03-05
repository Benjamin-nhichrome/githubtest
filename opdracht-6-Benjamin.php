<?php

class Scooter {
    public $kleur;
    public $merk;
    public $inhoudTank;

    public function __construct($merk, $kleur, $inhoudTank) {
        $this->merk = $merk;
        $this->kleur = $kleur;
        $this->inhoudTank = $inhoudTank;
    }

    public function checkTank() {
        if ($this->inhoudTank <= 0) {
            echo "De tank van de {$this->merk} scooter is leeg.<br>";
        } else {
            echo "De tank van de {$this->merk} scooter bevat nog brandstof.<br>";
        }
    }
}

$piaggio = new Scooter("Piaggio", "rood", 6);
$peugeot = new Scooter("Peugeot", "zwart", 7);

$piaggio->checkTank();
$peugeot->checkTank();

?>
