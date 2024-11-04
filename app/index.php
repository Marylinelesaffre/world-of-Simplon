<?php

include_once 'classes/Character.php';

// $ragnar = new Character();
// $ragnar->setName('Ragnar');
// $ragnar->setHealth(100); //->= associer ragnar est associer au nom Ragnar
// $ragnar->health = 100;
 $charactere01 = new Character('Ragnar', 150 , 22);
 $charactere01->describe();
//  $charactere01->setHealth(115);
//  $charactere01->describe();
 

 $charactere02 = new Character('Elsa', 114 , 19);
 $charactere02->describe();

//  $charactere02->setHealth($charactere02->getHealth() - $charactere01->getAttack());
//  echo $charactere02->getHealth();

$charactere01->hit($charactere02);
echo $charactere02->getHealth().'<br>';

$charactere01->hit($charactere02);
echo $charactere02->getHealth().'<br>';

$charactere01->hit($charactere02);
echo $charactere02->getHealth().'<br>';


//  $charactere02->setHealth(80);
//  echo $charactere02->getHealth();

//  $charactere02->setHealth(60);
//  echo $charactere02->getHealth();

 



