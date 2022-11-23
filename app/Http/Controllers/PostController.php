<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Newsletter;
use illuminate\Http\Request;

class PostController extends Controller 
{
    function index(Request $request)
    {
        $title = 'Home' ;
        return view('welcome',[
            
            'title' =>  $title ]);
    }
    
     function newsletter(Request $request )
    {  
        $newsletter = new Newsletter();

        $newsletter->email = $_POST['email'];

        $newsletter -> save();
    }
    
    function about()
    {
        $title = 'About' ;
        return view('about', [
            
            'title' =>  $title ]);
    }


    function pricing()
    {
        $title = 'Pricing';
        return view('pricing', compact('title'));
    }


    function service()
    {
        $title = 'Service';
        return view('services', compact('title'));
    }

    function contact()
    {
        $title = 'Contact';
        return view('contact', compact('title'));
    }

    function contactform(Request $request)
    {
        $contactform = new Contact();

        $contactform->First_name = $_POST['first_name'];
        $contactform->Last_name = $_POST['last_name'];
        $contactform->Email = $_POST['email'];
        $contactform->Phone = $_POST['phone'];
        $contactform->Company = $_POST['company'];
        $contactform->Website = $_POST['website'];
        $contactform->Service = $_POST['service'];
        $contactform->Message = $_POST['message'];
        
        $contactform -> save();
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

