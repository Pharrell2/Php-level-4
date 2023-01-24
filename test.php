<?php

class weg{
    public $afstand;
    public $minFile;
}

class voertuig {
    public $spanning;
    public $maxSnel;
}

class fiets extends voertuig{

    public function soortFiets(){
        if($this-> maxSnel == 15){
            echo "U heeft gekozen voor een niet elektrisch fiets.";
        }else{
            echo "U heeft gekozen voor een elektrisch fiets.";
        }
    }
    public function snelheidFiets($span, $snel){
        return $span * $snel;
    }
    public function reistijdFiets($km, $snelheid){
        return 60/$snelheid * $km;
    }
}

class scooter extends voertuig{
    public function soortScooter(){
        if($this-> maxSnel == 25){
            echo "U heeft gekozen voor een snorscooter.";
        }else{
            echo "U heeft gekozen voor een bromscooter.";
        }
    }
    public function snelheidScooter($span, $snel){
        return $span * $snel;
    }
    public function reistijdScooter($km, $snelheid, $vertraging){
        return (60/$snelheid * $km) + $vertraging;
    }
}

$weg1 = new weg();
$km = $weg1->afstand = $_POST['lengte'];
$minFile = $weg1->minFile = $_POST['vertragingDoorFile'] / 60;

$fiets1 = new fiets();

$snelheidFiets = $fiets1 -> maxSnel = $_POST['welNietElektrisch'];
$bandenSpanningFiets = $fiets1 -> spanning = $_POST['bandenspanningFiets'] / 100;
$eindSnelheidFiets = $fiets1 -> snelheidFiets( $bandenSpanningFiets , $snelheidFiets);

$scooter1 = new scooter();

$bandenSanningScooter = $scooter1->spanning = $_POST['bandenspanningScooter'];
$snelheidScooter = $scooter1->maxSnel = $_POST['maximaleSnelheidScooter']/ 100;
$eindSnelheidScooter = $scooter1->snelheidScooter($bandenSanningScooter, $snelheidScooter);

if(isset($_POST['submit'])){
?>
<div class = "container">
    <div  class = "card">
        <div class="alert alert-secondary">
<?php
echo $fiets1 -> soortFiets() . "<br>";
echo $scooter1 -> soortScooter() . "<br>";
echo "<br>";
echo "De snelheid van de fiets is: " . $fiets1 -> snelheidFiets($bandenSpanningFiets, $snelheidFiets) . " km/u <br>";
echo "De snelheid van de scooter is: " . $scooter1 -> snelheidScooter($bandenSanningScooter, $snelheidScooter) . " km/u <br>";	
echo "<br>";	
echo "De reistijd met de fiets is: " . $fiets1 -> reistijdFiets($km, $eindSnelheidFiets) . " minuten <br>";
echo "De reistijd met de scooter is: " . $scooter1 -> reistijdScooter($km, $eindSnelheidScooter, $minFile) . " minuten <br>";
?>
</div>
    <div class="alert alert-primary">
<?php
if($eindSnelheidFiets < $eindSnelheidScooter){
    echo "<h4>De scooter is sneller dan de fiets.</h4>";
}else{
    echo "<h4>De fiets is sneller dan de scooter.</h4>";
}
}
?>
</div>
    </div>
        </div>
<?php 
include "eindopdracht-formulier-pharrell.php";