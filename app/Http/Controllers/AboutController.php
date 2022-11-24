<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function create()
    {
        $title = 'About' ;
        return view('about', [
            
            'title' =>  $title ]);
    }
}
