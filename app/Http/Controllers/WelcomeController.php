<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function facture($n){
        return view('facture')->withNumero($n);
    }
    public function article($n){
        return view('article')->withNum($n);
    }
}
