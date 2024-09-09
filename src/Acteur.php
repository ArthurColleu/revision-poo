<?php

class Acteur {
    private string $nom;
    private string $prenom;
    private array $acteurs = [];
    public function __construct(string $prenom, string $nom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
    public function getNom() : string {
        return $this->nom;
    }
    public function getPrenom() : string {
        return $this->prenom;
    }
    public  function ajouterActeur(Acteur $acteur) : void {
        $this->acteurs[] = $acteur;
    }

    /**
     * @return Acteur[]
     */
    public function getActeurs() : array {
        return $this->acteurs;
    }
}