<?php

class Character{
    // attributes
    private string $name;
    private int $health; //santé
    private int $attack;

    
    // Constructor initialise l'objet
    public function __construct($param1, $param2  , $param3) {
        $this->setName($param1);
        $this->setHealth($param2);
        $this->setAttack($param3);
    }
    // Getters
     public function getName(){
        return $this->name;
     }
     public function getHealth(){
        return $this->health;
     }
     public function getAttack(){
        return $this->attack;
     }

    // Setters
    public function setName($param1){
        $this->name = $param1;
    }

    public function setHealth($param2){
        $this->health = $param2;

    }

    public function setAttack($param3){
        $this->attack = $param3;

    }

    // Methodes
    public function describe(){ //this=faire appel a mon objet(Character)
        echo 'Nom : '.$this->getName().'<br>';
        echo 'Santé : '.$this->getHealth().'<br>';
        echo 'Attaque : '.$this->getAttack().'<br>';
        
    }

    public function hit($target){
        $target->getHealth() - $this->getAttack();
        $target->setHealth($target->getHealth() - $this->getAttack());
        echo '<hr>';

    }
}