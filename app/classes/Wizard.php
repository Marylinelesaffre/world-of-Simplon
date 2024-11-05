<?php

class Wizard extends Character {
    // Attributs
    private string $staff;

     // constente de classe en public et majuscule
     const JOB = "magicienne";

    // Constructeur initialise l'objet
     public function __construct($name, $health , $attack , $staff) {
        //ne pas oublier de mettre dans le même ordre que dans l'index
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
        echo 'équiper de  : ' . $this->getStaff() . '<br>';
        echo 'catégorie : ' . Wizard::JOB . '<br';
        echo '<hr>';
    }
}