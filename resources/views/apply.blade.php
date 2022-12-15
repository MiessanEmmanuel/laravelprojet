@extends('layouts/app')
@extends('layouts/partials/navbarother')
@section('content')

<div class="aboutother-banniere aboutother-banniere-services container-fuild py-5" style="">
   <div class="section-title">
      <h2>{{ $title}}</h2>
   </div>
</div>
<main>
    <section id="apply">
        <div class="description-apply">
            <h2>Lorem, ipsum</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit, ipsam?</p>
        </div>
        <div class="jobs">
             @foreach($jobapplys as $jobapply)   
                <div><a href="apply/{{str_replace(' ','-',$jobapply->lib)}}">{{$jobapply->lib}}<i class="bi bi-chevron-right"></i></a></div>
             @endforeach
        </div>
    </section>
</main>

@endsection('content')
