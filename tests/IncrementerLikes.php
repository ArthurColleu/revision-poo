<?php

use App\Personne;
use App\Entites\Equipe;


class IncrementerLikes extends \PHPUnit\Framework\TestCase
{
    private Personne $personne;
    private Equipe $equipe;

    protected function setUp() :void
    {
        //Cette méthode est appelée lors de l'exécution de chaque tests
        $this->validateur =new Personne();
        $this->validateur =new Equipe();

    }

    public function liker_likeAjouter_(){
        // Arrange
        $equipeLiker="PSG";
        // Act
        $resultat = $this->personne->liker($equipeLiker);
        // Assert
        $this->assertEquals();
    }

}