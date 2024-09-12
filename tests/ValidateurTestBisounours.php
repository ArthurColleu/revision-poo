<?php

require_once "vendor/autoload.php";

use App\Validateur;
$validateur = new Validateur();
$nombre =10;
if ($validateur->verifieNombre($nombre)) {
    echo "Le nombre $nombre est valide";
} else {
    echo "Le nombre $nombre n'est pas valide";
}

echo PHP_EOL;
$nombre =-12;

// Gestion des exception
try {
    // Code surveillé ( susceptitble de lancer une exeption)
    $validateur->verifieNombre2($nombre);
    echo "Le nombre $nombre est valide";

} catch (Exception $e) {
    //Attraper l'exception si elle a été lancée
    echo $e->getMessage();
}

echo PHP_EOL;
$password = "Mangervostable";

// Gestion des exception
try {
    // Code surveillé ( susceptitble de lancer une exception)
    $validateur->verifiePassword($password);

} catch (Exception $e) {
    //Attraper l'exception si elle a été lancée
    echo $e->getMessage();
}