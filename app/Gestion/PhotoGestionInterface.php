<?php 

namespace App\Gestion; // on etabli une connexion bind entre l interface et la classe dans App\Providers\AppServiceProvider

interface PhotoGestionInterface
{
  public function save($image);
}