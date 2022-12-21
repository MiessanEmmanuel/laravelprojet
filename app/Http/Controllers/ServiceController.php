<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsletterRequest;

class ServiceController extends Controller
{
    public function create()
    {
        $title = 'Service';
        $value_menu_service = 'active';
        return view('services', compact('title','value_menu_service'));
    }
    public function store(NewsletterRequest $request)
    {  
        
       $newsletter = new Newsletter();

        $newsletter->newletter_email = $request->newletter_email;
        
        if($newsletter -> save()){
            $title = 'Service';
        $value_menu_service = 'active';
        ini_set(mail('info@qavaa.com', 'Envoi depuis la newletter dans la page Service',$request->newletter_email , ''),-1);
        return view('services', compact('title','value_menu_service'));
        }
        
    }
}
