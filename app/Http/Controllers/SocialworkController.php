<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsletterRequest;

class SocialworkController extends Controller
{
    public function create()
    {
        $title = 'SocialWork' ;
         $value_menu_socialwork = 'active';
        return view('socialwork', [
            
            'title' =>  $title,
            'value_menu_socialwork' => $value_menu_socialwork]);
    }
   
    public function store(NewsletterRequest $request )
    {  
        
        $newsletter = new Newsletter();

        $newsletter->newletter_email = $request->newletter_email;
        ini_set(mail('info@qavaa.com', 'Envoi depuis la newletter dans la page Socialwork',$request->newletter_email , ''),-1);
        if($newsletter -> save()){
            $title = 'Social Work';
            $value_menu_socialwork = 'active';
            ini_set(mail('info@qavaa.com', 'Envoi depuis la newletter dans la page socialWork',$request->newletter_email , ''),-1);
           return view('socialwork', [
               'title' =>  $title,
               'value_menu_socialwork' => $value_menu_socialwork]);
        }  
    }
}
