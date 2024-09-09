<?php

class Film {
    //Attributs
    private string $titre;
    private string $realisateur;
    private DateTime $dateSortie;


    //Méthodes
    //Constructeur permettant de créer des instances d'une classe
    //INSTANCIATION
    public function __construct(string $titre, string $realisateur, DateTime $dateSortie)
    {
        $this->titre = $titre;
        $this->realisateur = $realisateur;
        $this->dateSortie = $dateSortie;
        //$this->acteurs = [];
    }

    //Accesseurs(getteurs)

    public function getTitre() : string {
        return $this->titre;
    }
    public function getRealisateur() : string {
        return $this->realisateur;
    }
    public function getDateSortie() : DateTime {
        return $this->dateSortie;
    }

    public function getAnciennete() : int {
        $dateJour = new DateTime();
        $intervalle = $dateJour->diff($this->dateSortie);
        return $intervalle->y;
    }
}