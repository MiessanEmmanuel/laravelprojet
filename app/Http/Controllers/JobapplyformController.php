<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobapplyformController extends Controller
{
    public function create($id){
        $title="coucou";
        $infojob = Apply::where('id',$id)->first();
        //dd($infojob);
        return view('jobapplyform',
                [
                    'infojob' =>$infojob
                ]);
        
    }
}
