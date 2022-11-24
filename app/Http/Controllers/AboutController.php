<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    function about()
    {
        $title = 'About' ;
        return view('about', [
            
            'title' =>  $title ]);
    }
}
