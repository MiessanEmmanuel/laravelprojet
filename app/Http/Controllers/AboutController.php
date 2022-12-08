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
         $value_menu_about = 'active';
        return view('about', [
            
            'title' =>  $title,
            'value_menu_about' => $value_menu_about]);
    }
   
    public function store(NewsletterRequest $request )
    {  
        
        $newsletter = new Newsletter();

        $newsletter->newletter_email = $request->newletter_email;

        if($newsletter -> save()){
             $title = 'About' ;
            $value_menu_about = 'active';

           return view('about', [
               'title' =>  $title,
               'value_menu_about' => $value_menu_about]);
        }  
    }
}
