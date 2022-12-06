<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function create()
    {
        $title = 'E-commerce' ;
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
            $title = 'E-commerce' ;
            $value_menu_ecommerce = 'active';
           return view('ecommerce', [
               'title' =>  $title,
               'value_menu_ecommerce' => $value_menu_ecommerce]);
        }  
    }
}
