<?php

namespace App;


class Acteur {
    private string $nom;
    private string $prenom;
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

    /**
     * @return Acteur[]
     */
    public function getActeurs() : array {
        return $this->acteurs;
    }
}