<?php

class Robot {
    private $naam;
    private $geluid;
    private $voortstuwing;

    public function setNaam($naam) {
        $this->naam = $naam;
    }

    public function setGeluid($geluid) {
        $this->geluid = $geluid;
    }

    public function setVoortstuwing($voortstuwing) {
        $this->voortstuwing = $voortstuwing;
    }

    public function getSound() {
        return $this->geluid;
    }
}

$wally = new Robot();
$wolly = new Robot();

$wally->setNaam("Wally");
$wally->setGeluid("Beep boop");
$wally->setVoortstuwing("Wielen");

$wolly->setNaam("Wolly");
$wolly->setGeluid("Buzz buzz");
$wolly->setVoortstuwing("Rupsbanden");

echo "Wally maakt het geluid: " . $wally->getSound() . "<br>";
echo "Wolly maakt het geluid: " . $wolly->getSound() . "<br>";

?>
