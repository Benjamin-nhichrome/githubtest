<?php

class Computer {
    public $merk;
    public $hdd_capacity;
    public $memory;

    public function __construct($merk, $hdd_capacity, $memory) {
        $this->merk = $merk;
        $this->hdd_capacity = $hdd_capacity;
        $this->memory = $memory;
    }
}

$softwareComputer = new Computer("Dell", "1TB", "8GB");

echo "Software Computer:<br>";
echo "Merk: " . $softwareComputer->merk . "<br>";
echo "HDD Capaciteit: " . $softwareComputer->hdd_capacity . "<br>";
echo "Geheugen: " . $softwareComputer->memory . "<br>";

?>
