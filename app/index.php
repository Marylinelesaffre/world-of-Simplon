<?php


// $ragnar = new Character();
// $ragnar->setName('Ragnar');
// $ragnar->setHealth(100); //->= associer ragnar est associer au nom Ragnar
// $ragnar->health = 100;
//  $charactere01 = new Character('Ragnar', 150 , 22);
//  $charactere01->describe();
// //  $charactere01->setHealth(115);
// //  $charactere01->describe();


//  $charactere02 = new Character('Elsa', 114 , 19);
//  $charactere02->describe();

// //  $charactere02->setHealth($charactere02->getHealth() - $charactere01->getAttack());
// //  echo $charactere02->getHealth();

// $charactere01->hit($charactere02);
// echo $charactere02->getHealth().'<br>';

// $charactere01->hit($charactere02);
// echo $charactere02->getHealth().'<br>';

// $charactere01->hit($charactere02);
// echo $charactere02->getHealth().'<br>';


//  $charactere02->setHealth(80);
//  echo $charactere02->getHealth();

//  $charactere02->setHealth(60);
//  echo $charactere02->getHealth();

include_once 'classes/Character.php';
include_once 'classes/Warrior.php';
include_once 'classes/Wizard.php';
include_once 'classes/Archer.php';

$Warrior01 = new Warrior('Elden', 200, 50, 'Sabre laser', 'bouclier');
$Warrior01->describe();

$Magicien = new Wizard ('Rannala', 180, 30, 'baton de magie');
$Magicien->describe();

//   $Magicien->hit($Warrior01);
//   echo $Warrior01->getHealth();
//   $Magicien->hit($Warrior01);
//   echo $Warrior01->getHealth();
//   $Magicien->hit($Warrior01);
//   echo $Warrior01->getHealth();

$nombreAttack = 8;

for ($i = 0; $i <$nombreAttack; $i++) 
{
    $Magicien->hit($Warrior01);
    echo "Santé du guerrier après l'attaque : " . $Warrior01->getHealth();
    echo '<hr>';
}

$Archer = new Archer ('Lara', 130, 50, 'arc');
$Archer->describe();

