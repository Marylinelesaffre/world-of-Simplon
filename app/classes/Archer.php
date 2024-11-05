<?php

class Archer extends Character
{
    // Attributs
    private string $bow;

    // constente de classe en public et majuscule
    const JOB = "archer";

    // Constructeur initialise l'objet
    public function __construct($name, $health, $attack, $bow)
    {
        //ne pas oublier de mettre dans le même ordre que dans l'index
        parent::__construct($name, $health, $attack); // Appel au constructeur parent
        $this->setBow($bow);
    }

    // Getters 
    public function getBow()
    {
        return $this->bow;
    }

    // Setters on va enregister dans l'objet
    public function setBow($bow)
    {
        $this->bow = $bow;
    }

    // Méthodes
    public function describe()
    {
        parent::describe(); // Appeler la méthode describe de la classe parente
        echo 'équiper de  : ' . $this->getBow() . '<br>';
        echo 'catégorie : ' . Archer::JOB  . '<br>';
        echo '<hr>';
    }
}
