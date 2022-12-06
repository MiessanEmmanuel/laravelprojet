<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsultingController extends Controller
{
    public function create()
    {
        $title = 'Consulting' ;
         $value_menu_consulting = 'active';
        return view('consulting', [
            
            'title' =>  $title,
            'value_menu_consulting' => $value_menu_consulting]);
    }
   
    public function store(NewsletterRequest $request )
    {  
        
        $newsletter = new Newsletter();

        $newsletter->newletter_email = $request->newletter_email;

        if($newsletter -> save()){
            $title = 'Consulting' ;
            $value_menu_about = 'active';
           return view('consulting', [
               'title' =>  $title,
               'value_menu_consulting' => $value_menu_consulting]);
        }  
    }
}
