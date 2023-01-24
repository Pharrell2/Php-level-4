<?php
class product{ 
    public $merk;
    public $kleur;
    public $type;
    public $prijs;
}

$dweil = new product();
$dweil->merk = 'Aurora';
$dweil->kleur ='zwart';
$dweil->type  =  'sponsmop';
$dweil->prijs  = '42,95';



echo $dweil->merk; echo "<br>"; 
echo $dweil->kleur; echo "<br>"; 
echo $dweil->type;  echo "<br>";    
echo $dweil->prijs;  echo "<br>";    



$stofzuiger = new product();
$stofzuiger->merk = 'Phillips';
$stofzuiger->kleur ='blauw';
$stofzuiger->type  =  'nat droogzuiger';
$stofzuiger->prijs  = '99,99';



echo $stofzuiger->merk; echo "<br>"; 
echo $stofzuiger->kleur; echo "<br>"; 
echo $stofzuiger->type;  echo "<br>";    
echo $stofzuiger->prijs;  echo "<br>";    
  
?>