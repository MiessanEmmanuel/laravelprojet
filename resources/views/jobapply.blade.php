@extends('layouts/app')
@extends('layouts/partials/navbarother')
@section('content')
<div class="aboutother-banniere aboutother-banniere-services container-fuild py-5" style="">
   <div class="section-title">
      <h2>{{$title}}</h2>
   </div>
</div>
<main id="job-apply">
    <div class="container">
    <div class="fw-bold fs-1 text-center mt-4">Lorem</div>
    <div class="navbar {{$affichage_trie? ''}}">
           <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Type Job
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <?php
                            $n = 1;
                        ?>
                    @foreach($jobstype as $typ)
                        <li><a class="dropdown-item" href="{{str_replace(' ','-',$title)}}/{{str_replace(' ','-',$typ->type)}}">{{$typ->type}}</a></li>

                        <?php
                            $n= $n +1
                        ?>
                    @endforeach
            
                </ul>
            </div>
    </div>
    <div class=" content-job justify-content-between">
            <div class=" content-job row mt-5 pb-5 bar-title">
                <div class="col align-self-center fw-bold">JOB</div>
                <div class="type-job col align-self-center fw-bold">TYPE</div>
                <div class="location-job col align-self-center fw-bold">LOCATION</div>
                <div class=" col-4 align-self-center fw-bold" >DESCRIPTION</div>
                <div class=" col align-self-center fw-bold"> APPLY</div>
            
            </div>
        @foreach($jobs as $job)   
            <div class="content-job row mt-5 pb-5">
                <div class="title-job col align-self-center ">{{$job->lib}}</div>
                <div class="type-job col align-self-center ">{{$job->type}}</div>
                <div class="location-job col align-self-center ">{{$job ->location}}</div>
                <div class="description-job col-4 align-self-center " >{{$job->description}}</div>
                <div class="col align-self-center"><a class="btn" href="">Apply</a></div>
            
            </div>
        @endforeach
    </div>
</div>
</main>


@endsection('content')
