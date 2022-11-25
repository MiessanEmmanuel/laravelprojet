<?php

namespace App\Http\Controllers;


use App\Models\Newsletter;
use illuminate\Http\Request;
use App\Http\Requests\NewsletterRequest;

class HomeController extends Controller 
{
   public function create()
    {
        $title = 'Home' ;
        return view('home',[
            
            'title' =>  $title ]);
    }
    
    public function store(NewsletterRequest $request )
    {  
        
        $newsletter = new Newsletter();

        $newsletter->newletter_email = $request->newletter_email;

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

