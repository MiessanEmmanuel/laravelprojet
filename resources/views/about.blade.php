@extends('layouts/app')
@extends('layouts/partials/navbarother')
@section('content')

  <!-- ======= About Us Section ======= -->
  
  <main id="aboutother" class=" about-other py-0">
    <div class="aboutother-banniere aboutother-banniere-about container-fuild py-5">
      <div class="section-title">
         <h2 class="">{{ $title}} Us</h2>
      </div>
    </div>


    <section id="">
      <div class="container" data-aos="fade-up">
        <h2 class="fs-3 text-center fw-bold">Our Priority</h2>
        <div class = "row  flex-column-reverse  flex-lg-row  jutify-content-between pt-3 ">
            <div class=" col-lg-6  d-flex flex-column  align-self-center pt-5  content  " data-aos="fade-right" data-aos-delay="100">
                <h4 class="d-block mx-auto fw-light">Our Values</h4>
                <div class="mt-2">
                  <p class="mt-1 txt-our ">
                  We work tirelessly towards delighting our customers with exceptional quality services and 
                  find profound pride in building world-class tech talent in Africa. 
                  These values are set and met by our team in every aspect of the work we do. 
                
                  </p>
                </div>
            </div>
            <div class="  col-lg-6 pt-lg-5 mx-auto d-block content" data-aos="fade-left" data-aos-delay="100">
              <img src="{{asset('img/hero-img.png')}}" alt="oups" class ="w-100 ">
            </div>
        </div>
        <div class ="row flex-column  flex-lg-row  jutify-content-between ">
            <div class="col-lg-6 pt-lg-5  mx-auto d-block content  " data-aos="fade-right">
              <img src="{{asset('img/why-us.png')}}" alt="oups" class ="w-100">
            </div>
            <div class="col-lg-6 d-flex flex-column align-self-center  content" data-aos="fade-left" >
                <h4 class="d-block mx-auto fw-light">Our Mission</h4>
                <div class="mt-2">
                  <p class="mt-1 txt-our">
                    Our mission is to bring transparency and certainty in the business world amongst Africans, to render consulting services to African SMEs to enable them meet their
                     digital challenges in the 21st century, 
                    to ease the trade in Africa through reliable logistics and payments, and to manage their online presence.
                
                  </p>
                </div>
            </div>
        </div>
      </div>
    </section>
    
   
    <!--section class="container row fin_about">
      <div class="col-8 img_finAbout position-relative ">
            <img src="{{asset('img/portfolio/portfolio-8.jpg')}}" alt="oups l'image ne s'est pas affiché" class = "w-100 ">
            <div class=" col-4 bg-primary d-flex flex-column align-items-center pt-5 my-5  content txtFloat_finAbout position-absolute top-0 start-100 translate-middle-x h-50 w-100" data-aos="fade-right" data-aos-delay="100">
              <h4 class="d-block">Our Philosophy</h4>
              <div class="mt-2">
                <p class="mt-1   ">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum voluptatum blanditiis necessitatibus reprehenderit nemo. Incidunt quod beatae magni odit,
                  eligendi totam a tenetur libero reprehenderit, vel dolorem, dolore quibusdam. Nesciunt.
                  
                </p>
              </div>
             </div>
      
      </div>
    </section-->
    <section class=" content section-bg" data-aos="fade-up">
      <div class="container">
        <div class="mb-4">
        <h2 class="text-center fw-bold">About</h2>
        </div>
        <div class="row mt-5">
          <div class="col-lg-6">
          <img src="{{asset('img/portfolio/portfolio-7.jpg')}}" alt="oups l'image ne s'est pas affiché" class = "w-100 ">

          </div>
          <div class="col-lg-6 center mt-xl-4 mt-3">
              <p class="txt-our"> 
              Qavaa Group is a social enterprise which seeks to enable sustainable development in Africa by encouraging aspiring entrepreneurs and sidepreneurs to give free expression to their dreams and foster economic growth within their community.

              We're mission driven, and we target our efforts at meeting the needs of our clients with their satisfaction in mind.

              We also help startups and established firms with their digital marketing leads, online presence management, website management, and general business consulting, for a better business experience and growth
              </p>
          </div>
        </div>
      </div>
      
    </section>
</main><!-- End About Us main -->

@endsection('content')

@section('newsletter')
  @include('layouts/partials/footer')
@endsection('newsletter')
