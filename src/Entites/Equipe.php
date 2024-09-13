<?php
namespace App\Entites;

class Equipe {
    private string $nom;
    private int $nombresLikes;

    function __construct(string $nom) {
        $this->nom = $nom;
        $this->nombresLikes = 0;
    }
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }
    public function getNom(): string {
        return $this->nom;
    }

    /**
     * @return int
     */
    public function getNombresLikes(): int
    {
        return $this->nombresLikes;
    }
    public function incrementerNombreLikes(): void{
        $this->nombresLikes++;
    }
}