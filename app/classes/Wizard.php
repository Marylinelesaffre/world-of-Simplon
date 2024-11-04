<?php

class Wizard extends Character {
    // Attributs
    private string $staff;

    // Constructeur initialise l'objet
    public function __construct($name = 'Magicien', $health = 180, $attack = 30, $staff = 'Bâton de magie') {
        parent::__construct($name, $health, $attack); // Appel au constructeur parent
        $this->setStaff($staff);
    }

    // Getters
    public function getStaff() {
        return $this->staff;
    }

    // Setters
    public function setStaff($staff) {
        $this->staff = $staff;
    }

    // Méthodes
    public function describe() {
        parent::describe(); // Appeler la méthode describe de la classe parente
        echo 'Bâton : ' . $this->getStaff() . '<br>';
    }
}