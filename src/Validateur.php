<?php

namespace App;

class Validateur
{
    public function verifieNombre( int $nombre ) : bool
    {
        //On teste toujours les cas d'erreurs en premier

        if ($nombre <= 0)
        {
            return false;
        }
        return true;
    }

    public function verifieNombre2( int $nombre ) : bool
    {
        //On teste toujours les cas d'erreurs en premier

        if ($nombre <= 0)
        {
            // Lancer une exception
            throw new \Exception("Le nombre est invalide");
        }
        return true;
    }

    public function verifiePassword( string $password ) : string
    {
        //On teste toujours les cas d'erreurs en premier

        if (strlen($password <= 8))
        {
            // Lancer une exception
            throw new \Exception("Le mot de passe doit cotenir au moins 8 caractères.");
        }
        $contientchiffre= false;
        $contientMajuscule= false;
        $contientMinuscule= false;

        for($i = 0; $i < strlen($password); $i++)
        {
            $char = $password[$i];
            if ($char >= '0' && $char <= '9')
            {
                $contientchiffre = true;
            }
            if ($char >= 'A' && $char <= 'Z')
            {
                $contientMajuscule = true;
            }
            if ($char >= 'a' && $char <= 'z')
            {
                $contientMinuscule = true;
            }
        }
        if (!$contientchiffre)
        {
            throw  new \Exception("Le mot de passe doit contenir au moins un chiffre");
        }
        if (!$contientMajuscule)
        {
            throw  new \Exception("Le mot de passe doit contenir au moins une Majuscule");
        }
        if (!$contientMinuscule)
        {
            throw  new \Exception("Le mot de passe doit contenir au moins une Minuscule");
        }
        throw  new \Exception("Le mot de passe est valide 👌😁👍");
    }
}