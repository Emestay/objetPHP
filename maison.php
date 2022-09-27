<?php

class maison {

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        if(!is_string($nom)){
            echo '$name must be a string!';
        }

        $this->nom = $nom;
    }
    public $nom;
    public $longeur;
    public $largeur;
    public $etage;


    public function __construct($nom, $longeur, $largeur, $etage)
    {
        $this->nom = $nom;
        $this->longeur = $longeur;
        $this->largeur = $largeur;
        $this->etage = $etage;

    }


    public function getSuperficie()
    {
        return ($this->largeur * $this->longeur);
    }
    public function getSuperficieEtages()
    {
        return (($this->largeur * $this->longeur) * $this->etage);
    }


}



