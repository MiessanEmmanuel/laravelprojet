<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\NewsletterRequest;

class TraitementController extends Controller
{
   
    public function create(ContactRequest $request)
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
        ini_set(mail('info@qavaa.com', 'Envoi depuis le formulaire dans la page Contact',[$request-> first_name,
        $request-> last_name,
        $request-> email,
        $request-> phone,
        $request-> company,
        $request-> website,
        $request-> service,
        $request-> message ], ''),-1);

       if($contactform -> save()){
        $value_menu_contact = 'active';
        $title = 'Contact';
        return view('/contact', compact('title','value_menu_contact'));
       }
    }
}