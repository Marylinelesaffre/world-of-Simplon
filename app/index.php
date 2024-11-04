<?php

include_once 'classes/Character.php';

// $ragnar = new Character();
// $ragnar->setName('Ragnar');
// $ragnar->setHealth(100); //->= associer ragnar est associer au nom Ragnar
// $ragnar->health = 100;
 $charactere01 = new Character('Ragnar', 150);
 $charactere01->describe();
 $charactere01->setHealth(115);
 $charactere01->describe();
 

 $charactere02 = new Character('Elsa', 114);
 $charactere02->describe();

 $charactere02->setHealth(99);
 echo $charactere02->getHealth();

 $charactere02->setHealth(80);
 echo $charactere02->getHealth();

 $charactere02->setHealth(60);
 echo $charactere02->getHealth();

 



