<?php
class robot{
    public $naam;
    public $geluid;
    public $voortstuwing;

    public function getSoort(){
        return $this->geluid;
    }

}

$wally = new robot();
$wally->naam = "Centrion";
$wally->geluid = "zzzzzzzzp";
$wally->voortstuwing = "lopend";
echo $wally->naam .  "<br>";
echo $wally->getSoort() . "<br>";
echo $wally->voortstuwing . "<br>";


$wolly = new robot();
$wolly->naam = "destroyer";
$wolly->geluid = "ggggggk";
$wolly->voortstuwing = "vliegend";
echo $wolly->naam . "<br>";
echo $wolly->getSoort() . "<br>";
echo $wolly->voortstuwing . "<br>";
?>