<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
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
}
