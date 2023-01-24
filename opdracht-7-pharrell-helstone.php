<?php
class Lamp{

   public $kleur;
   public $helderheid;
   public $isAan;

   public function setSoort($stand){
       $this->isAan = $stand;

   }
}

$woonkamerlamp = new lamp();
$woonkamerlamp->setSoort("uit");
echo $woonkamerlamp->isAan ."<br>";

$keukenlamp = new lamp();
$keukenlamp->setSoort("aan");
echo $keukenlamp->isAan;  "<br>"
?>