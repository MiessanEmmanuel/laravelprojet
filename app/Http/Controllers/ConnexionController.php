<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function create()
    {
        $title = 'Connexion' ;
        return view('connexion', [
            'title' =>  $title]);
    }
}
