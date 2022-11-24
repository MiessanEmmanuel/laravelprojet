<?php

namespace App\Http\Controllers;


use App\Models\Newsletter;
use illuminate\Http\Request;

class HomeController extends Controller 
{
    function index()
    {
        $title = 'Home' ;
        return view('welcome',[
            
            'title' =>  $title ]);
    }
    
     function newsletter(Request $request )
    {  
        $validated = $request->validate([
            'email' => 'required'
                        
        ]);

        $newsletter = new Newsletter();

        $newsletter->email = $_POST['email'];

        $newsletter -> save();
    }
    

    function portfolio1()
    {
        $title = 'Portfolio-1';
        return view('portfolio/portfolio1', compact('title'));
    }

    function portfolio2()
    {
        $title = 'Portfolio-2';
        return view('portfolio/portfolio2', compact('title'));
    }

    function portfolio3()
    {
        $title = 'Portfolio-3';
        return view('portfolio/portfolio3', compact('title'));
    }

    function portfolio4()
    {
        $title = 'Portfolio-4';
        return view('portfolio/portfolio4', compact('title'));

    }

}

?>

