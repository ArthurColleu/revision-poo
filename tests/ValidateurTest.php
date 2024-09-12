<?php

use App\Validateur;

class ValidateurTest extends \PHPUnit\Framework\TestCase
{
    private Validateur $validateur;
    protected function setUp() :void
    {
        //Cette méthode est appelée lors de l'exécution de chaque tests
        $this->validateur =new Validateur();

    }
    public function testValidateur(){
        // Arrange
        // Act
        // Assert
        $this->assertTrue(true);

    }
    #[\PHPUnit\Framework\Attributes\Test]
    public function verifierNombre2_NombrePositif_True(){
        // Arrange

        $nombre=10;
        // Act
        $resultat = $this->validateur->verifieNombre2($nombre);
        // Assert
        $this->assertTrue($resultat);
    }

    public function testVerifierNombre2_NombreNegatifZero_True(){
        // Vérification de l'exception
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("Le nombre est invalide");

        // Act
        $nombre=-1;
        // Assert
        $this->validateur->VerifieNombre2($nombre);
    }
}