<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsletterRequest;

class EcommerceController extends Controller
{
    public function create()
    {
        $title = 'Ecommerce' ;
         $value_menu_ecommerce = 'active';
        return view('ecommerce', [
            
            'title' =>  $title,
            'value_menu_ecommerce' => $value_menu_ecommerce]);
    }
   
    public function store(NewsletterRequest $request )
    {  
        
        $newsletter = new Newsletter();

        $newsletter->newletter_email = $request->newletter_email;

        if($newsletter -> save()){
            $title = 'Ecommerce' ;
            $value_menu_ecommerce = 'active';
           return view('ecommerce', [
               'title' =>  $title,
               'value_menu_ecommerce' => $value_menu_ecommerce]);
        }  
    }
}
