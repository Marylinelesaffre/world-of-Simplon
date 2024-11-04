<?php


class Warrior extends Character {
    // Attributs
    private string $shield;
    private string $sword;

    // Constructeur initialise l'objet
    public function __construct($name = 'Hulk', $health = 200, $attack = 25, $sword = 'Épée en mousse', $shield = 'Bouclier') {
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
        echo 'Épée : ' . $this->getSword() . '<br>';
        echo 'Bouclier : ' . $this->getShield() . '<br>';
        echo '<hr>';
    }
}