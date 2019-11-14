<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImagesRequest;
use App\Gestion\PhotoGestionInterface;


class PhotoController extends Controller
{
    public function getPhoto(){
        return view('photo');
    }
    public function postPhoto(ImagesRequest $request, PhotoGestionInterface $photogestion){
        $image = $request->file('image'); // on recupere le champ file de notre formulaire
        if($photogestion->save($image)){
            return view('photo_ok'); 
        }
        return redirect('photo')->with('error','Désolé mais votre image ne peut pas être envoyée !'); // en cas d erreur sur le fichier << taille extension...>>
    }
}
