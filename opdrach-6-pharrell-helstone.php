<?php
class scooter{
    public $merk;
    public $kleur;
    public $inhoudtank;

    public function checkinhoudtank(){
        if ($this->inhoudtank == 0){
            echo "de tank is leeg! <br>";
        }
        else{
            echo "de tank is niet leeg!";
        }
    }
}

$piago = new scooter();
$piago->kleur = "rood";
$piago->merk = "Piago";
$piago->checkinhoudTank();

$peugot = new scooter();
$peugot->kleur = "bruin";
$peugot->merk = "Peugot";
$peugot->checkinhoudTank();
?>