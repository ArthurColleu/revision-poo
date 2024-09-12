<?php

use App\Validateur;

use PHPUnit\Framework\TestCase;

class AjouterActeursTest extends TestCase{
    private \App\Film $film;
    private \App\Acteur $acteur;
    protected function setUp() : void
    {
        //Cette méthode est appelée lors de l'execution de chaque test
        $this->film = new \App\Film("Le retour de Phong", "Nguyen Phong", \DateTime::createFromFormat("d/m/Y","12/05/1042"));
        $this->acteur = new \App\Acteur("Bruyère","Adrien");
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function addActeur_ActeurDejaAjoute_Exception()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("L'acteur est déjà présent dans ce film.");

        $this->film->AjouterActeur($this->acteur);
        $this->film->AjouterActeur($this->acteur);

    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function getAnciennete_FilmAvantMaintenant_982()
    {
        $resultat = $this->film->getAnciennete();

        $this->assertEquals(982,$resultat);
    }

}