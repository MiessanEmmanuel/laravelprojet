<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use App\Models\Applyjob;
use App\Models\Jobapplyform;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class JobapplyformController extends Controller
{
    public function create($id){
        global $ide;
        $ide = $id;
        $title="coucou";
        $infojob = Applyjob::where('id',$id)->first();
        //dd($infojob);
        return view('jobapplyform',
                [
                    'infojob' =>$infojob
                ]);
        
    }
    public function store(Request $request, $id){
        $infojoblib = Applyjob::where('id',$id)->first('lib');
        $infojobtype = Applyjob::where('id',$id)->first('type');
        $infojoblocation = Applyjob::where('id',$id)->first('location');

        $cv = Storage::disk('local')->put('Cv', $request->cv);
        $motivationletter = Storage::disk('local')->put('Lettre de motivation', $request->motivationletter);
        $applyform = new Jobapplyform();
        
        $applyform->First_name = $request-> first_name;
        $applyform->Last_name = $request-> last_name;
        $applyform->Email = $request-> email;
        $applyform->Phone = $request-> phone;
        $applyform->cv = $cv;
        $applyform->motivationletter = $motivationletter;
        $applyform->lib = $infojoblib -> lib;
        $applyform->type = $infojobtype-> type;
        $applyform->location = $infojoblocation -> location;
       $send_mail = ini_set(mail('info@qavaa.com', 'Envoi du formulaire "apply" ',[
       'First Name : ' + $request-> first_name,
       'Last Name : '+$request-> last_name,
        'Email : '+$request-> email,
        'Phone : '+$request-> phone,
        'Cv : '+$request->cv,
        'Motivation letter : '+$request->motivationletter,
        'Job : '+$infojoblib -> lib,
        'Job Type : '+$infojobtype-> type,
         'Job Location : '+$infojoblocation -> location
        
        ]
        , ''),-1);

        if($applyform-> save()){
           return redirect('/apply');
        }
    }
}
