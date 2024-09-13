<?php

use App\Personne;
use App\Entites\Equipe;

class IncrementerLikesTest extends \PHPUnit\Framework\TestCase
{
    private Personne $personne;
    private Equipe $nombresLikes;
    private Equipe $equipe;

    protected function setUp(): void
    {
        // Initialisation des objets
        $this->personne = new Personne();
        $this->equipe = new Equipe();
    }

    public function test_AugmentLike_AugmentePositif()
    {
        // Arrange
        $this->equipe->setNom("PSG");

        // Act
        $this->personne->liker($this->equipe);

        // Assert
        $this->assertEquals($this->nombresLikes, $this->equipe->getNombresLikes(), "Le nombre de likes a bien augmenté.");
    }
}

