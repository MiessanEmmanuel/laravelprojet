@extends('layouts/app')

@extends('layouts/partials/navbarhome')

@section('content')
  
   <!-- ======= Header ======= -->


  <!-- ======= Hero Section ======= -->
  
  <!-- ======= Header ======= -->


  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Qavaa Group</h1>
          <div>
            <p>Your one-stop shop for your digital transformation</p>
          </div>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="contact#contact-destination" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{asset('img/hero-img.png')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://prizedbeauty.com/" target="_blank" rel="noopener noreferrer"><img src="{{asset('img/clients/prized-logo.png')}}" class="img-fluid" alt=""></a>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://naturessyrup.qavaainnovate.com/" target="_blank" rel="noopener noreferrer"><img src="{{asset('img/clients/naturesyrup-logo.png')}}" class="img-fluid" alt=""></a>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://ecdministries.org/" target="_blank" rel="noopener noreferrer"><img src="{{asset('img/clients/eglise-logo.png')}}" class="img-fluid" alt=""></a>
          </div>
          
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://extravagantgracebook.com/" target="_blank" rel="noopener noreferrer"><img src="{{asset('img/clients/extravagant-grace-logo.png')}}" class="img-fluid" alt=""></a>
          </div>
         
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <a href="https://qavaa.com/" target="_blank" rel="noopener noreferrer"><img src="{{asset('img/clients/qavaa-website-logo.png')}}" class="img-fluid" alt=""></a>
          </div>
          
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://naturessyrup.qavaainnovate.com/" target="_blank" rel="noopener noreferrer"><img src="{{asset('img/clients/naturesyrup-logo.png')}}" class="img-fluid" alt=""></a>
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container " data-aos="fade-up">
        <div class="skills">
          <div class="section-title content">
            <h3>Who we are</h3>
          </div>
        </div>
        <div class="row content">
          <div class="col-lg-6 align-self-center">
            <p>
            Qavaa Group is a social enterprise which seeks to enable sustainable development in Africa and around 
            the world by encouraging aspiring entrepreneurs and sidepreneurs to give free expression to their dreams and foster economic growth within their community.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> At Qavaa Group, we're mission driven, and we target our efforts at meeting the needs of our clients with their satisfaction in mind.</li>
              <li><i class="ri-check-double-line"></i>Qavaa Group helps startups and extablished firms with their Digital marketing leads, Online presence management, Website social management, and General business consulting, for a better business experience and growth.</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <img src="{{asset('img/dataanalytics.jpg')}}" alt="data analytics" class="w-100">
            
          </div>
          
            <a href="about" class="btn-learn-more text-center w-25 mx-auto ">Learn More</a>
        
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid skills" data-aos="fade-up">
        <div class="skills ">
          <div class="section-title content">
            <h3>What we do</h3>
          </div>
        </div>
        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">


            <div class="accordion-list">
              <ul >
                <li>
                  <a href="ecommerce"><span>01</span> E-Commerce </a>
                </li>
                <li>
                  <a href="consulting"><span>02</span> Business consulting</a>
                </li>
                <li>
                  <a href="ecommerce#digital-marketing-destination"><span>03</span> Digital Marketing </i></a>
                  <!--div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <ul class="mt-2">
                      <li class="py-1 ">
                        More Adverstising campaign
                      </li>
                      <li  class="py-1">
                        
                        Referencing management
                      </li>
                      <li  class="py-1">
                        
                        Analysis extration
                      </li>
                      <li  class="py-1">

                        Chat
                      </li>
                    </ul>
                  </div-->
                </li>
                <li>
                  <a href="consulting#web"><span>04</span> Web & App design</a>
                  <!--div id="accordion-list-3" class="collapse show" data-bs-parent=".accordion-list">
                    <ul class="mt-2">
                      <li class="py-1 text-dark">
                        One Page Website
                      </li>
                      <li  class="py-1">
                        
                        Simple Website
                      </li>
                      <li  class="py-1">
                        
                         Store Website
                      </li>
                      <li  class="py-1">
                        
                        App
                      </li>
                    </ul>
                  </div-->
                </li>

                <li>
                  <a href="consulting#data"><span>05</span> Website & App Maintenance</a>
                  <!--div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                    <ul class="mt-2">
                      <li class="py-1 text-dark">
                        Content Management
                      </li>
                      <li  class="py-1">
                        Content update(e.g Adress change)
                      </li>
                      <li  class="py-1">
                         Page creation & Update
                      </li>
                      <li  class="py-1">
                        Website Customization
                      </li>
                      <li class="py-1 text-dark">
                        Section update or creation
                      </li>
                      <li  class="py-1">
                        Graphics (section) update
                      </li>
                      <li  class="py-1">
                         Pages content creation & update
                      </li>
                      <li  class="py-1">
                        Web design update & Optimization
                      </li>
                    </ul>
                  </div-->
                </li>
                <li>
                  <a href="socialwork"><span>06</span> Social Project Sponsorship</a>
                </li>
                
                
              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("{{asset("img/why-us.png")}}");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">
        <div class="section-title content">
          <h3>Why choose us</h3>
        </div>
        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="{{asset('img/skills.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content align-self-center" data-aos="fade-left" data-aos-delay="100">
            <h4>We are the right fit for your project if</h4>
          
            <div class="skills-content">

              <div class="progress">
              <span class="skill"><i class="ri-check-double-line"></i> You care about satisfactory results </span>
                
              </div>

              <div class="progress">
                <span class="skill"><i class="ri-check-double-line"></i> You have a unique offer </span>
                
                </div>
              </div>

              <div class="progress">
                <span class="skill"><i class="ri-check-double-line"></i> Your company needs a scale-up</span>
                
              </div>

              <div class="progress">
                <span class="skill"><i class="ri-check-double-line"></i> You desire an accessible and responsive flow in your organization </span>
                
              </div>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->
   <!-- ======= Cta Section ======= -->
   <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start align-self-center">
            <h3 class="">Do you have a project in mind? Schedule a free meeting today.</h3>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn " href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="skills ">
          <div class="section-title content">
            <h3>Recent Projects</h3>
          </div>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box" style="width:95%;">
              <div class="icon" ><img src="{{asset('img/clients/prized-logo.png')}}" class="img-fluid d-block mx-auto" alt="" style=" height:150px;"></div>
              <h4><a href="https://prizedbeauty.com/" target="_blank" rel="noopener noreferrer">Prized Beauty</a></h4>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box " style="width:95%;" >
              <div class="icon"><img src="{{asset('img/clients/Extravagant-Grace.png')}}" class="img-fluid d-block mx-auto" alt="" style=" height:150px;"></div>
              <h4><a href="https://extravagantgracebook.com" target="_blank" rel="noopener noreferrer">Extravagant Grace</a></h4>
            </div>
          </div>

         

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box" style="width:95%;">
              <div class="icon" ><img src="{{asset('img/clients/naturesyrup.jpg')}}" class="img-fluid d-block mx-auto align-self-center" alt="" style=" height:150px;" ></div>
              <h4><a href="https://naturessyrup.qavaainnovate.com/" target="_blank" rel="noopener noreferrer">Nature's Syrup</a></h4>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box" style="width:95%;" >
              <div class="icon"><img src="{{asset('img/clients/eglise-logo.png')}}" class="img-fluid d-block mx-auto" alt="" style=" height:150px;"></div>
              <h4><a href="https://ecdministries.org/" target="_blank" rel="noopener noreferrer">ECD Ministries</a></h4>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

 
    

    <!-- ======= Portfolio Section ======= -->
    <!--section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

      <div class="skills ">
          <div class="section-title content">
            <h3>Portfolio</h3>
          </div>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{asset('img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="{{asset('img/portfolio/portfolio-1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{asset('img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="{{asset('img/portfolio/portfolio-2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{asset('img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="{{asset('img/portfolio/portfolio-3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{asset('img/portfolio/portfolio-4.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="{{asset('img/portfolio/portfolio-4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{asset('img/portfolio/portfolio-5.jpg')}}" class="img-fluid" alt="oups"></div>
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="{{asset('img/portfolio/portfolio-5.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{asset('img/portfolio/portfolio-6.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="{{asset('img/portfolio/portfolio-6.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{asset('img/portfolio/portfolio-7.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="{{asset('img/portfolio/portfolio-7.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{asset('img/portfolio/portfolio-8.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="{{asset('img/portfolio/portfolio-8.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{asset('img/portfolio/portfolio-9.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="{{asset('img/portfolio/portfolio-9.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section--><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <!--section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="mb-5">
          <h2 class="text-center mb-4 fw-bold">Team</h2>
          <p class="w-75  mx-auto text-center"> Meet with our skilled and industrious team.</p>
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
    </section-->


    <!-- ======= Frequently Asked Questions Section ======= -->
    <!-- ((((((((  TESTIMONIALS  ))))))))))section id="faq" class="faq ">
      <div class="container" data-aos="fade-up">

        <div class="skills ">
          <div class="section-title content">
            <h3>Testimonials</h3>
          </div>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section--><!-- End Frequently Asked Questions Section -->

    

  </main><!-- End #main -->

       
 @endsection('content')
   
