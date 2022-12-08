<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsletterRequest;

class TraitementController extends Controller
{
   
    public function create(NewsletterRequest $request )
    {  
        
        $newsletter = new Newsletter();

        $newsletter->newletter_email = $request->newletter_email;

        if($newsletter -> save()){
            $value_menu_contact = 'active';
            $title = 'Contact';
            return view('contact', compact('title','value_menu_contact'));
        } 
    }
}
