<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsletterRequest;

class AboutController extends Controller
{
    public function create()
    {
        $title = 'About' ;
        return view('about', [
            
            'title' =>  $title ]);
    }
   
    public function store(NewsletterRequest $request )
    {  
        
        $newsletter = new Newsletter();

        $newsletter->newletter_email = $request->newletter_email;

        if($newsletter -> save()){
          $title = 'About' ;
            return view('about', [
            'title' =>  $title ]);  
        }  
    }
}
