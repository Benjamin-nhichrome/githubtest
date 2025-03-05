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

$nieuweAuto = new Auto("Toyota", "Blauw", "Sedan", "Luxe", "Benzine");
$nogEenAndereAuto = new Auto("BMW", "Zwart", "SUV", "Sport", "Diesel");

class ZelfBedachteClass {
    public $waardeA;
    public $waardeB;
    public $waardeC;

    public function __construct($waardeA, $waardeB, $waardeC) {
        $this->waardeA = $waardeA;
        $this->waardeB= $waardeB;
        $this->waardeC = $waardeC;
    }
}

$object1 = new ZelfBedachteClass("waardeA", "waardeB", "waardeC");
$object2 = new ZelfBedachteClass("A", "B", "C");

?>
