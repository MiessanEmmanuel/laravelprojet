@extends('layouts/app')
@extends('layouts/partials/navbarother')
@section('content')

  <!-- ======= About Us Section ======= -->
  
  <main id="aboutother" class=" py-0">
    <div class="aboutother-banniere aboutother-banniere-about container-fuild py-5">
      <div class="section-title">
         <h2 class="">About Us</h2>
      </div>
    </div>


    <section id="">
      <div class="container" data-aos="fade-up">
        <h2 class="fs-3 text-center">Our Priority</h2>
        <div class = "row  flex-column-reverse  flex-lg-row  jutify-content-between pt-3 ">
            <div class=" col-lg-6  d-flex flex-column  align-self-end pt-5  content  " data-aos="fade-right" data-aos-delay="100">
                <h4 class="d-block mx-auto">Our Values</h4>
                <div class="mt-2">
                  <p class="mt-1 txt-our ">
                  We work effortless towards achieving the needs and satisfactions of 
                  the society and Africa at large. These values are set and meet by 
                  our zealous team in every aspect of the work we do. <br>
                 <span class="text-dark fw-2">Transparency</span></li><br>
                 <span class="text-dark fw-2">Connectivity (Connection)</span>
                    
                    
                    <div class="py-4">
                      <button type="button" class="btn btn-outline-primary  aboutbut-our w-25 d-block mx-auto ">Learn more</button>
                    </div>
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
            <div class="col-lg-6 d-flex flex-column align-self-end  content" data-aos="fade-left" >
                <h4 class="d-block mx-auto">Our Mission</h4>
                <div class="mt-2">
                  <p class="mt-1 txt-our">
                    Our mission is to bring transparency and certainty in the business world amongst Africans, to render consulting services to African SMEs to enable them meet their
                     digital challenges in the 21st century, 
                    to ease the trade in Africa through reliable logistics and payments, and to manage their online presence.
                    <div class=" py-4">
                      <button type="button" class="btn btn-outline-primary  aboutbut-our  w-25 d-block mx-auto ">Learn more</button>
                    </div>
                  </p>
                </div>
            </div>
        </div>
      </div>
    </section>
    
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="mb-5">
          <h2 class="text-center mb-4">Team</h2>
          <p class="w-75  mx-auto text-center">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="presentation ">
              <img src="{{asset('img/team/team-1.jpg')}}" alt="oups" class="w-100">
            </div>
            <div class="info-presentation">
              <div class="info-presentation-text position-relative">
                <div class="info-presentation-text-position position-absolute bottom-0 start-0 d-flex w-100 justify-content-between p-3">
                  <div class="">
                    <h4>Marcus Doe</h4>
                    <p>CEO</p>
                  </div>
                  <a href="portfolio1" class="d-block align-self-center" target="blank" name="portfolio"><i class="bi bi-plus-circle text-primary"></i></a> 
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="presentation">
              <img src="{{asset('img/team/team-2.jpg')}}" alt="oups" class="w-100">
            </div>
            <div class="info-presentation">
              <div class="info-presentation-text position-relative">
                <div class="info-presentation-text-position position-absolute bottom-0 start-0 d-flex w-100 justify-content-between p-3">
                  <div class="">
                    <h4>Marcus Doe</h4>
                    <p>CEO</p>
                  </div>
                  <a href="portfolio2" class="d-block align-self-center" target="blank" name="portfolio"><i class="bi bi-plus-circle text-primary"></i></a> 
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="presentation">
              <img src="{{asset('img/team/team-3.jpg')}}" alt="oups" class="w-100">
            </div>
            <div class="info-presentation">
              <div class="info-presentation-text position-relative">
                <div class="info-presentation-text-position position-absolute bottom-0 start-0 d-flex w-100 justify-content-between p-3">
                  <div class="">
                    <h4>Marcus Doe</h4>
                    <p>CEO</p>
                  </div>
                  <a href="portfolio3" class="d-block align-self-center" target="blank" name="portfolio"><i class="bi bi-plus-circle text-primary"></i></a> 
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="presentation">
              <div>
                <img src="{{asset('img/team/team-4.jpg')}}" alt="oups" class="w-100">
              </div>
            </div>
            <div class="info-presentation">
              <div class="info-presentation-text position-relative">
                <div class="info-presentation-text-position position-absolute bottom-0 start-0 d-flex w-100 justify-content-between p-3">
                  <div class="">
                    <h4>Marcus Doe</h4>
                    <p>CEO</p>
                  </div>
                  <a href="portfolio4" class="d-block align-self-center" target="blank" name="portfolio"><i class="bi bi-plus-circle text-primary"></i></a> 
                </div>
              </div>
            </div>
          </div>
          
        </div>
          <button type="button" class="btn btn-primary mt-5 d-block mx-auto">
            Learn More
          </button>
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
    <section class="container content" data-aos="fade-up">
      <div class="mb-4">
        <h2 class="text-center">Lorem, ipsum.</h2>
      </div>
      <div class="row mt-5">
          <div class="col-lg-6">
          <img src="{{asset('img/portfolio/portfolio-7.jpg')}}" alt="oups l'image ne s'est pas affiché" class = "w-100 ">

          </div>
          <div class="col-lg-6 center mt-xl-4 mt-3">
              <p class="txt-our"> 
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa facilis perspiciatis excepturi eos cupiditate nihil sed consectetur laudantium fugiat repellat?
                Ullam quidem fuga illo officia, odit nostrum repellat pariatur praesentium. 
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, voluptate quisquam? Accusantium ad, minima sint, commodi provident impedit 
                animi iure voluptatum eos laborum placeat saepe. Animi nobis voluptatem veritatis a.
              </p>
          </div>
      </div>
    </section>
</main><!-- End About Us main -->
@endsection('content')
