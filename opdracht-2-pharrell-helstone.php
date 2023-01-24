<?php
class auto{
    public $merk;
    public $kleur;
    public $type;
    public $uitvoering;
    public $brandstof;
}

$nieuweAuto = new auto();
$nieuweAuto->merk = 'Audi';
$nieuweAuto->kleur ='blauw';
$nieuweAuto->type  =  'sport';
$nieuweAuto->uitvoering  = 'coupe';
$nieuweAuto->brandstof  =  'euro 95';


echo $nieuweAuto->merk; echo "<br>"; 
echo $nieuweAuto->kleur; echo "<br>"; 
echo $nieuweAuto->type;  echo "<br>";    
echo $nieuweAuto->uitvoering;  echo "<br>";    
echo $nieuweAuto->brandstof; echo "<br>";    

?> 