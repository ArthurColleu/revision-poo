<?php
namespace App;


use App\Entites\Equipe;

class Championnat{
    private string $nom;

    //Association avec Equipe ( one to many)
    private array $equipes=[];

    public function __construct(string $nom){
        $this->nom = $nom;
    }

    public function ajouterEquipe(Equipe $equipe) : void
    {
        $this->equipes[] = $equipe;
    }
    public function getNombreEquipe() : int
    {
        return count($this->equipes);
    }
}