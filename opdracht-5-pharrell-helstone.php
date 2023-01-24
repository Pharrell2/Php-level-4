<?php
class mens{
    public $voornaam;
    public $achternaam;
    public $leeftijd;
    public $geslacht;
}

class basketballer extends mens{
    public $Club;
    public $rank;
}
    $basketballer = new basketballer();
    $basketballer->Club="Dallas Mavericks";
    $basketballer->rank="4";

    echo $basketballer->Club; echo "<br>";
    echo $basketballer->rank; echo "<br>";

    class coach extends mens{
    public $naam;
    public $prijs;
    }
    $coach = new coach();
    $coach->naam ="Jason Kidd";
    $coach->prijs= "8,5 miljoen";

    echo $coach->naam; echo  "<br>";
    echo $coach->prijs; echo "<br>";



?>