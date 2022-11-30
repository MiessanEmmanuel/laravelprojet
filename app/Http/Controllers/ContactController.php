<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\NewsletterRequest;

class ContactController extends Controller
{
   public function create()
    {
        $value_menu_contact = 'active';
        $title = 'Contact';
        return view('contact', compact('title','value_menu_contact'));
    }

    public function store(ContactRequest $request)
    {
        $contactform = new Contact();

        $contactform->First_name = $request-> first_name;
        $contactform->Last_name = $request-> last_name;
        $contactform->Email = $request-> email;
        $contactform->Phone = $request-> phone;
        $contactform->Company = $request-> company;
        $contactform->Website = $request-> website;
        $contactform->Service = $request-> service;
        $contactform->Message = $request-> message;
        
        $contactform -> save();
    }
    public function storenew(NewsletterRequest $request )
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
