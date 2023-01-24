<?php
class computer{
    public $merk;
    public $hdd_capacity;
    public $memory;
    
}

$nieuwecomputer = new computer();
$nieuwecomputer->merk = 'Lenovo';
$nieuwecomputer->hdd_capacity ='2TB';
$nieuwecomputer->memory  =  '4GB';

echo $nieuwecomputer->merk; echo "<br>"; 
echo $nieuwecomputer->hdd_capacity; echo "<br>"; 
echo $nieuwecomputer->memory;  echo "<br>";   
?>