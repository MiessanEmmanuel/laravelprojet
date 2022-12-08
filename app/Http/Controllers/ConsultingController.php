<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsletterRequest;

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
            ini_set(mail('emmanueljeanmiessan@gmail.com', 'Envoi depuis la page Contact',$request->newletter_email , ''),-1);
           return view('consulting', [
               'title' =>  $title,
               'value_menu_consulting' => $value_menu_consulting]);
        }  
    }
}
