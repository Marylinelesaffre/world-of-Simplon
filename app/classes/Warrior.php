<?php


class Warrior extends Character {
    // Attributs
    private string $shield;
    private string $sword;

    // constente de classe en public et majuscule
    const JOB = "guerrier";
    const SWORD01 = "épée laser";
    const SWORD02 = "épée en mousse";
    const SHIELD01 = "bouclier";
  


    // Constructeur initialise l'objet
    public function __construct($name ,  $health , $attack,  $sword,  $shield) {
        parent::__construct($name, $health, $attack); // Appel au constructeur parent
        $this->setSword($sword);
        $this->setShield($shield);
    }

    // Getters
    public function getShield() {
        return $this->shield;
    }

    public function getSword() {
        return $this->sword;
    }

    // Setters
    public function setSword($sword) {
        $this->sword = $sword;
    }

    public function setShield($shield) {
        $this->shield = $shield;
    }

    // Méthodes
    public function describe() {
        parent::describe(); // Appeler la méthode describe de la classe parente
        echo 'équiper de : ' .Warrior::SWORD01 .'<br>';
        echo 'équiper de : ' .Warrior::SHIELD01 . '<br>';
        echo 'catégorie : ' .Warrior::JOB;
        echo '<hr>';
    }
}