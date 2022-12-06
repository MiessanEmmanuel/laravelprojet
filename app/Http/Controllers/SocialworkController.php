<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SocialworkController extends Controller
{
    public function create()
    {
        $title = 'Social Work' ;
         $value_menu_socialwork = 'active';
        return view('socialwork', [
            
            'title' =>  $title,
            'value_menu_socialwork' => $value_menu_socialwork]);
    }
   
    public function store(NewsletterRequest $request )
    {  
        
        $newsletter = new Newsletter();

        $newsletter->newletter_email = $request->newletter_email;

        if($newsletter -> save()){
            $title = 'Social Work';
            $value_menu_socialwork = 'active';
           return view('socialwork', [
               'title' =>  $title,
               'value_menu_socialwork' => $value_menu_socialwork]);
        }  
    }
}