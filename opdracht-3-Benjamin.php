<?php

class Product {
    public $merk;
    public $prijs;
    public $type;
    public $kleur;

    public function __construct($merk, $prijs, $type, $kleur) {
        $this->merk = $merk;
        $this->prijs = $prijs;
        $this->type = $type;
        $this->kleur = $kleur;
    }
}

$dweil = new Product("hema", 10, "lang", "rood");
$stofzuiger = new Product("aegon", 50, "gfs505", "grijs");

echo "Dweil:<br>";
echo "Merk: " . $dweil->merk . "<br>";
echo "Prijs: $" . $dweil->prijs . "<br>";
echo "Type: " . $dweil->type . "<br>";
echo "Kleur: " . $dweil->kleur . "<br><br>";

echo "Stofzuiger:<br>";
echo "Merk: " . $stofzuiger->merk . "<br>";
echo "Prijs: $" . $stofzuiger->prijs . "<br>";
echo "Type: " . $stofzuiger->type . "<br>";
echo "Kleur: " . $stofzuiger->kleur . "<br>";

?>
