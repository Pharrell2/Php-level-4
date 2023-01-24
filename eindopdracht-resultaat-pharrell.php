<?php
class weg{
    public $afstand;
    public $minfile;
}
class voertuig{
    public $spanning;
    public $maxsnel;
}
class fiets extends voertuig{
    public function soortFiets(){
        if ($this-> maxsnel ==15){
            echo 'u heeft gekozen voor een niet elektrische fiets';
        }else{
            echo 'u heeft gekozen voor een elektrische fiets';
        }
    }
    public function snelheidfiets($span, $snel){
        return $span * $snel;
    }
    public function reistijdfiets($km , $snelheid){
        return 60/$snelheid * $km;
    }
}

class scooter extends voertuig{
    public function soortScooter(){
        if ($this-> maxsnel == 25){
            echo 'u heeft gekozen voor een bromscooter';
        }else{ 
            echo 'u heeft gekozen voor een snorscooter';
        }
    }
    public function snelheidscooter($span, $snel){
        return $span * $snel;
    }
    public function reistijdscooter($km , $snelheid, $vertraging){
        return (60/$snelheid *$km) + $vertraging;
    }
}
//print_r($_POST);//
$weg0 = New weg();
$km = $weg0 -> afstand = $_POST['afstand'];
$minfile = $weg0 -> minfile = $_POST['vertragingFile'];


$fiets1 = New Fiets();
$snelheidfiets = $fiets1-> maxsnel = $_POST ['welNietElektrische'];
$bandenspanningfiets = $fiets1 -> spanning = $_POST['bandenspanningvanFiets']/ 100;
$eindsnelheidfiets = $fiets1 -> snelheidfiets($bandenspanningfiets , $snelheidfiets);


$scooter1 = New scooter();
$snelheidscooter = $scooter1-> maxsnel = $_POST ['bandenspanningvanScooter'];
$bandenspanningscooter = $scooter1 -> spanning = $_POST['maximaleSnelheidvanScooter']/ 100;
$eindsnelheidscooter = $scooter1 -> snelheidscooter($bandenspanningscooter , $snelheidscooter);

if(isset($_POST["submit"])){
}
?>

<div class = "container">
    <div class = "card">
        <div class = "alert alert-secondary"><?php
        echo $fiets1 -> soortfiets()  . "<br>";
        echo $scooter1 -> soortscooter() . "<br>";
        echo "<br>";
        echo "De snelheid van de fiets is" . $fiets1 -> snelheidfiets($bandenspanningfiets, $snelheidfiets) . "Km per uur" . "<br>";
        echo "De snelheid van de scooter is". $scooter1 -> snelheidscooter($bandenspanningscooter, $snelheidscooter) . "Km per uur" . "<br>";
        echo "<br>";

        echo "De reistijd van de fiets is" . $fiets1 -> reistijdfiets($km, $eindsnelheidfiets) . "minuten" . "<br>";
        echo "De reistijd van de scooter is" . $scooter1 -> reistijdscooter($km, $eindsnelheidscooter, $minfile) . "minuten" . "<br>";
?>
</div>

<div class = "alert alert-primary">
    <?php
    if ($eindsnelheidfiets < $eindsnelheidscooter){
        echo "<h2>De scooter pakken is sneller</h2>";
    }else{
        echo "<h2>De fiets pakken is sneller";
 
    }
    ?>
    </div>
</div>
</div>

<?php
include "eindopdracht-formulier-pharrell.php";
?>
