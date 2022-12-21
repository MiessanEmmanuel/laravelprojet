@extends('layouts/app')
@extends('layouts/partials/navbarother')
@section('content')

<div class="aboutother-banniere aboutother-banniere-services container-fuild py-5" style="">
   <div class="section-title">
      <h2>Apply Now</h2>
   </div>
</div>
<main id="">
    <section id="jobapplyform"class="container"> 
    <div class="job-presentation">
         <h2 class="title-job  align-self-center text-center">{{$infojob->lib}}</h2>
        <p class="infojob text-center">This is a {{strtolower($infojob->type)}} job in the city of {{$infojob->location}} </p>
    
    </div>
    <p class="description-job text-center align-self-center " >{{$infojob->description}}</p>
    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch contact">
        <form action="" method="post" role="form" class="php-email-form my-3" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="form-group col-md-6">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" class="form-control" id="first_name" required>
                @error('first_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" class="form-control" id="last_name" required>
                @error('last_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="email">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="phone">Phone</label>
                <input type="phone" name="phone" class="form-control" id="phone" required>
                @error('phone')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="cv">Cv/Resume</label>
                <input type="file" name="cv" class="form-control" id="cv" accept=".docx,.xdocx,.pdf" required>
                @error('cv')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="motivationletter">Cover Letter</label>
                <input type="file" name="motivationletter" class="form-control align-self-center" id="motivationletter" required>
                @error('motivationletter')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="Submit" id="btn-contact" class="">Apply</button></div>
        </form>
        <div>
            
        </div>
    </div>
        
    </section>
    

</main>      

@endsection('content')