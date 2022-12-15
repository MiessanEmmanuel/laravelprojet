<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplyController extends Controller
{
    public function create()
    {
        $title = 'Apply';
        $jobapplys = Apply::distinct()->get('lib');
        //dd( $jobapplys);
        return view('apply', [
            'title' =>  $title,
            'jobapplys' =>  $jobapplys]);
    }
    public function store($job)
    {
        
        $title = str_replace('-',' ',$job) ;
        $jobs = Apply::where('lib',str_replace('-',' ',$job))
                        ->get();
        $jobstype = Apply::distinct()->where('lib',str_replace('-',' ',$job))
                                            ->get('type'); 
        //dd($jobstype);           
        //dd( $jobs);
        return view('jobapply', [
            'title' =>  $title,
            'jobs' =>  $jobs,
           
            ]);
            
    }
    public function sort(Request $request,$job, $valueclause ){
        $title = str_replace('-',' ',$job) ;
        $jobs = Apply::where('lib',str_replace('-',' ',$job))
                        ->where( 'type' , str_replace('-',' ',$valueclause))
                        ->get();
        $affichage_trie = 'd-none';
        //dd($jobs);
        $jobstype = Apply::distinct()->where('lib',str_replace('-',' ',$job))
                                     ->get('type');    
        //dd($jobstype);           
       // dd( $jobs);
        return view('jobapply', [
            'title' =>  $title,
            'jobs' =>  $jobs,
            'valueclause' => $valueclause,
            'affichage_trie' => $affichage_trie,
            'jobstype' =>  $jobstype
            ]);
    }
}
