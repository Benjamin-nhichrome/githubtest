<?php

class Weg {

    private $reisafstand;

    /**
     * @return mixed
     */
    public function getReisafstand()
    {
        return $this->reisafstand;
    }

    /**
     * @param mixed $reisafstand
     * @return Weg
     */
    public function setReisafstand($reisafstand)
    {
        $this->reisafstand = $reisafstand;
        return $this;
    }
}

class Voertuig {
    private $bandenspanning = 0;
    private $maximumSnelheid = 0;

    public function calculateSpeed(){

        return ($this->bandenspanning != 0) ? $this->bandenspanning * $this->maximumSnelheid : 0;
    }
    /**
     * @return mixed
     */
    public function getBandenspanning()
    {
        return $this->bandenspanning;
    }

    /**
     * @param mixed $bandenspanning
     * @return Voertuig
     */
    public function setBandenspanning($bandenspanning)
    {
        $this->bandenspanning = $bandenspanning;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaximumSnelheid()
    {
        return $this->maximumSnelheid;
    }

    /**
     * @param mixed $maximumSnelheid
     * @return Voertuig
     */
    public function setMaximumSnelheid($maximumSnelheid)
    {
        $this->maximumSnelheid = $maximumSnelheid;
        return $this;
    }


}
class Fiets extends Voertuig{

    /**
     * Deze methode berekend hoe lang een fiets eer over doet om bij de bestemming te komen.
     * @return void
     */
    public function calculateSpeed()
    {
        return 0;
        // $tijdFiets = ($snelheidFiets != 0) ? (($reisafstand / $snelheidFiets) * 60) : 0;
        // $tijdScooter = ($snelheidScooter != 0) ? (($reisafstand / $snelheidScooter) * 60) + $vertraging : 0;

    }
}
class Scooter extends Voertuig {

    private $vertraging;

    /**
     * @return mixed
     */
    public function getVertraging()
    {
        return $this->vertraging;
    }

    /**
     * Deze methode berekend hoe lang een scooter eer over doet om bij de bestemming te komen.
     * @return void
     */
    public function calculateSpeed()
    {

        //$tijdFiets = ($snelheidFiets != 0) ? (($reisafstand / $snelheidFiets) * 60) : 0;
        //$tijdScooter = ($snelheidScooter != 0) ? (($reisafstand / $snelheidScooter) * 60) + $vertraging : 0;
        return //hier moet je de snelheid van de scooter terug geven.;
    }
    /**
     * @param mixed $vertraging
     * @return Scooter
     */
    public function setVertraging($vertraging)
    {
        $this->vertraging = $vertraging;
        return $this;
    }

}

$weg = new Weg();
$fiets = new Fiets();

if ($_SERVER["REQUEST_METHOD"] == "POST") {



    $weg->setReisafstand($_POST['reisafstand']);


    $fiets->setBandenspanning($_POST['bandenspanning_scooter']);
    $fiets->setMaximumSnelheid($_POST['snelheid_fiets']);

    $scooter = new Scooter();
    $scooter->setBandenspanning($_POST['bandenspanning_scooter']);
    $scooter->setMaximumSnelheid($_POST['snelheid_scooter']);
    $scooter->setVertraging($_POST['vertraging']);
}

$fiets->calculateSpeed();
$scooter->calculateSpeed();
$fiets->get
/*
// Check if the necessary variables are set
if (!isset($reisafstand, $vertraging, $scooter, $fiets, $bandenspanningScooter, $bandenspanningFiets)) {
    echo "Please provide all the required input.";
    exit;
}
*/
/*
$bandenspanningFietsResult = $bandenspanningFiets / 100;
$bandenspanningScooterResult = $bandenspanningScooter / 100;



// Avoid division by zero errors
$tijdFiets = ($snelheidFiets != 0) ? (($reisafstand / $snelheidFiets) * 60) : 0;
$tijdScooter = ($snelheidScooter != 0) ? (($reisafstand / $snelheidScooter) * 60) + $vertraging : 0;

echo "<br>";
echo "Reisafstand: " . $reisafstand . " kilometer";
echo "<br>";
echo "Vertraging door file: " . $vertraging . " minuten";
echo "<br> <br>";

echo "Scooter:";
echo "<br>";
echo "Snelheid Scooter: " . $snelheidScooter . " Km/u";
echo "<br>";
echo "Tijd met de scooter: " . round($tijdScooter) . " minuten";
echo "<br> <br> ";

echo "Fiets:";
echo "<br>";
echo "Snelheid Fiets: " . $snelheidFiets . " Km/u";
echo "<br>";
echo "Tijd met de fiets: " . round($tijdFiets) . " minuten";
echo "<br> <br>";

if ($tijdFiets < $tijdScooter) {
    echo "Je kunt beter de fiets pakken.";
} else {
    echo "Je kunt beter de scooter pakken.";
}
?>
*/
