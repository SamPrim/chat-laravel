<?php
namespace App\Gestion;
use App\Gestion\PhotoGestionInterface;

Class PhotoGestion implements PhotoGestionInterface{
    public function save($image){
        if($image->isValid())
        {
            $chemin = config('images.path'); // chemin uploads defini dans images.php << images.path >>
            $extension = $image->getClientOriginalExtension(); // getClientOriginalExtension  pour l'extension original du fichier
            do {
                $nom = str_random(10) . '.' . $extension; // on genere un nom de fichier << ex: 4.png >>
            } while(file_exists($chemin . '/' . $nom)); // on verifie si le fichier uploads existe
            return $image->move($chemin, $nom) ;// on deplace l image vers le dossier upload        }
        }
        return false;
    }
}

// php artisan clear-compiled  en cas d erreur lors de la modificatino des fichiers
