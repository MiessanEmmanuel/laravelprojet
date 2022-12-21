<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use App\Models\Applyjob;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplyController extends Controller
{
    public function create()
    {
        $title = 'Apply';
        $jobapplys = Applyjob::distinct()->get('lib');
        //dd( $jobapplys);
        return view('apply', [
            'title' =>  $title,
            'jobapplys' =>  $jobapplys]);
    }
    public function store($job)
    {
        
        $title = str_replace('-',' ',$job) ;
        $jobs = Applyjob::where('lib',str_replace('-',' ',$job))
                        ->get();
        $jobstype = Applyjob::distinct()->where('lib',str_replace('-',' ',$job))
                                            ->get('type');
        //dd($jobstype);           
        //dd( $jobs);
        return view('jobapply', [
            'title' =>  $title,
            'jobs' =>  $jobs,
            'jobstype' => $jobstype
            ]);
            
    }
    public function sort(Request $request,$job, $valueclause ){
        $title = str_replace('-',' ',$job) ;
        $jobs = Applyjob::where('lib',str_replace('-',' ',$job))
                        ->where( 'type' , str_replace('-',' ',$valueclause))
                        ->get();
        $affichage_trie = 'd-none';
        //dd($jobs);
        $jobstype = Applyjob::distinct()->where('lib',str_replace('-',' ',$job)) ->get('type');
            
        //dd($jobstype);           
       // dd( $jobs);
        return view('jobapply', [
            'title' =>  $title,
            'jobs' =>  $jobs,
            'valueclause' => $valueclause,
            'affichage_trie' => $affichage_trie,
            'jobstype' =>  $jobstype,
            ]);
    }
}
