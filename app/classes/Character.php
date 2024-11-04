<?php

class Character{
    // attributes
    private string $name;
    private int $health; //santé
    

    // Constructor initialise l'objet
    public function __construct($param1 ='Nom', $param2 = 200) {
        $this->setName($param1);
        $this->setHealth ($param2);
    }
    // Getters
     public function getName(){
        return $this->name;
     }
     public function getHealth(){
        return $this->health;
     }

    // Setters
    public function setName($param1){
        $this->name = $param1;
    }

    public function setHealth($param2){
        $this->health = $param2;

    }

    // Methodes
    public function describe(){ //this=faire appel a mon objet(Character)
        echo $this->getName().'<br>';
        echo $this->getHealth();
        echo '<hr>';

    }
}