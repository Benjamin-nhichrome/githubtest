<?php

class Lamp {
    public $kleur = "iets";
    public $helderheid;
    private $isAan;

    public function __construct($helderheid) {
        $this->helderheid = $helderheid;
        $this->isAan = false; 
    }

    public function setStatus($status) {
        $this->isAan = $status;
    }

    public function getStatus() {
        return $this->isAan ? "aan" : "uit";
    }
}

$woonkamerLamp = new Lamp(100);
$keukenLamp = new Lamp(75);

$woonkamerLamp->setStatus(false);

echo "Woonkamerlamp is " . $woonkamerLamp->getStatus() . ".<br>";
echo "Keukenlamp is " . $keukenLamp->getStatus() . ".<br>";

?>
