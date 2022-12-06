@extends('layouts/app')
@extends('layouts/partials/navbarother')
@section('content')
<div class="aboutother-banniere aboutother-banniere-services container-fuild py-5" style="">
   <div class="section-title">
      <h2>{{ $title}}</h2>
   </div>
</div>

<main >
    <!--===========Website design/development=========-->
    <section class="" >  

        <div class="services-other" data-aos="fade-up"  >
            <div class="text-center mb-4 container" >
               <h2 class="fw-bold" id="web">Website design</h2>
            </div>
            <div class="container align-items-center gy-3 gx-md-4 flex-md-row d-flex flex-column-reverse">
                <div class=" col-md p-3 align-items-center" data-aos="fade-right">
                    <h2 class="fw-light mb-3">Experience the best of web design</h2>
                    <p class="lh-lg">
                    We design responsive and quality websites and web application for various purposes and also serve as tool for a successful online marketing, ranging from Business websites, church websites, Organizational website, Multivendors stores, and web applications.
                    Our web development team are always up to date with new features in other to satisfy the desires of our clients and to make their website user friendly.
                    
                    </p>
                    
                </div>
                <div class=" col-md p-3" data-aos="fade-left">
                     <div class="">
                        <img src="{{asset('img/serviceweb.jpg')}}" alt="oups l'image ne s'est pas affiché" class="w-100">
                     </div>
                </div>
            </div>
            <div class="container align-items-center gy-3 gx-md-4 flex-md-row d-flex flex-column">
                <div class=" col-md p-3" data-aos="fade-left">
                     <div class="">
                        <img src="{{asset('img/serviceweb2.jpg')}}" alt="oups l'image ne s'est pas affiché" class="w-100">
                     </div>
                </div>
                <div class=" col-md p-3 align-items-center" data-aos="fade-right">
                    <h2 class="fw-light mb-3">A good quality of service</h2>
                    <p class="lh-lg">
                    Our website design/development involves responsiveness, nice looking site. Our team of
                     developers are skilled in various programming languages your project may require and are also skilled in Wordpress. 
                     Our services involves:
                    <ul class="enumeration">
                        <li><i class="ri-check-double-line me-2 fs-5"></i>One Page Website</li>
                        <li><i class="ri-check-double-line me-2 fs-5"></i>Simple Website</li>
                        <li><i class="ri-check-double-line me-2 fs-5"></i>Store Website</li>
                        <li><i class="ri-check-double-line me-2 fs-5 "></i>App</li>
                    </ul>
                    </p>
                    
                </div>
                
            </div>
            <div class="container">
                <div class="text-center mb-5"  >
                    <h3 class="fw-light" id="web">Features</h3>
                </div>
                <div class="flex-md-row d-flex flex-column py-2 mx-auto gy-3 gx-md-4 ">

                    <div class="col row mx-2 py-3 shadow p-3 mb-5  rounded website-development">
                        <h5 class=" text-center my-3">UX Design</h5>
                        <div class="col">
                            <p>
                                Qavaa Group UX design team will Design the best layout that will be user friendly for both your business and visitors.
                            </p>
                        </div>
                    </div>
                    <div class="col row mx-2 shadow p-3 mb-5 rounded website-maintenance">
                        <h5 class=" text-center my-3">Full Stack Development</h5>
                    
                        <div class="col">
                            <p>
                                Flexible navigation, user friendly both on mobile device and other devices, completely responsive
                            </p>
                        </div>
                    </div>
                    <div class="col row mx-2 shadow p-3 mb-5  rounded social-management">
                        <h5 class=" text-center my-3">Site Maintenance</h5>
                        <div class="col">
                            <p>
                                We will keep your site up to date, to avoid malware, bug, and downtime, and to make sure your site is up and running for you. Hire us for peace for mind!
                            </p>
                            
                        </div>
                    </div>
                </div>
                <div class=" py-2 flex-md-row d-flex flex-column  gy-3 gx-md-4 ">
                    <div class="col row mx-2 py-3 shadow p-3 mb-5 rounded website-development">
                        <h5 class=" text-center my-3">SEO</h5>
                        <div class="col">
                            <p>
                                In other to promote your site visibility, we can optimize your website with search engine.
                            </p>
                        </div>
                    </div>
                    <div class="col row mx-2 shadow p-3 mb-5  rounded website-maintenance">
                        <h5 class=" text-center my-3">Speed</h5>

                        <div class="col">
                            <p>
                                We make sure your site is not overloaded so as to enable your visitors enjoy the flexibility of your site
                            </p>
                        </div>
                    </div>
                    <div class="col row mx-2 shadow p-3 mb-5 rounded social-management">
                        <h5 class=" text-center my-3">Custom Email</h5>
                        <div class="col">
                            <p>
                                It is very essential for your business to operate with a custom mail, as it makes you stand out while showcasing your business as a corporate entity.
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="text-center mb-5"  >
                        <h3 class="fw-light" id="web">Others Features</h3>
                </div>
                <div class=" row py-2   gy-3 gx-md-4 ">
                        <div class="col row mx-2 py-3 shadow p-3 mb-5 rounded website-development">
                            <h5 class=" text-center my-3">SEO Keyword Research (Search Terms) & Integration</h5>
                        </div>
                        <div class="col row mx-2 shadow p-3 mb-5 rounded website-maintenance">
                            <h5 class=" text-center my-3">Custom & Responsive Web Development</h5>
                            <div class="col">
                                
                            </div>
                        </div>
                        
                </div>
                <div class="row py-2 gy-3 gx-md-4 ">
                        <div class="col row mx-2 py-3 shadow p-3 mb-5 rounded website-development">
                            <h5 class=" text-center my-3">Content Development</h5>
                            
                        </div>
                        <div class="col row mx-2 shadow p-3 mb-5 rounded website-maintenance">
                            <h5 class=" text-center my-3">Domain & File Hosting</h5>

                            <div class="col">
                                
                            </div>
                        </div>
                        <div class="col row mx-2 shadow p-3 mb-5 rounded social-management">
                            <h5 class=" text-center my-3">Custom Brand Email</h5>
                            <div class="col">
                                
                                
                            </div>
                        </div>
                        </div>
                </div>
                
            </div>
        </div>
         <!-- ======= Pricing Section ======= -->
      <div id="pricing" class="pricing pricing-other">
        <div id="website-development" class="container" data-aos="fade-up">

          <div class="text-center">
            <h2  class="text-center">Website development</h2>
            <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, adipisci?</p>
          </div>
          <div class="mx-auto  ">
            <div class="row">

              <div class="col-lg-4 text-center " data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div class="row pt-0">
                    <div class="col-6 px-0">
                      <h3>One Page Website</h3>
                      <h6><sup>$</sup>350 to <sup>$</sup>800</h6>
                    </div>
                    <div class="col-1 px-0 mx-0">/</div>
                    <div class="col-5 px-0">
                      <h3>Simple Website</h3>
                      <h6><sup>$</sup>400 to <sup>$</sup>900</h6>
                    </div>
                  </div>
                  <ul class="">
                    <li class="px-0 fw-bold text-center">Included Function</li>
                      <li><i class="bx bx-check"></i> landing pages and Optin forms</li>
                      <li><i class="bx bx-check"></i> Images,sliders(image gallery management)</li>
                      <li><i class="bx bx-check"></i>Embedded videos</li>
                      <li><i class="bx bx-check"></i> Navigation and user</li>
                      <li><i class="bx bx-check"></i> friendliness</li>
                      <li><i class="bx bx-check"></i> Save</li>
                      <li><i class="bx bx-check"></i> Improve the speed of the site</li>
                      <div class="row pt-0">
                        <div class="col-5"><li><i class="bx bx-check"></i> 1 Page</li></div>
                        <div class="col-1 align-self-center">/</div>
                        <div class="col-5"><li><i class="bx bx-check"></i> 5 Page</li></div>
                      </div>
                      <li class="na"><i class="bx bx-x"></i><span>Shopping</span> </li>
                      <li class="na"><i class="bx bx-x"></i><span>Integration</span> </li>
                  </ul>
                  <p>
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Optional Functions
                    </a>
                    
                  </p>
                  <div class="collapse my-3" id="collapseExample">
                    <div class="card card-body">
                    <ul>
                      <li><i class="bx bx-check"></i> Document management</li>
                      <li><i class="bx bx-check"></i> Hosting</li>
                      <li><i class="bx bx-check"></i>30 Go Storage</li>
                      <li><i class="bx bx-check"></i> Sign-up forms, newsletter forms, info-for-product forms</li>
                      <li><i class="bx bx-check"></i> Register/login</li>
                      <li><i class="bx bx-check"></i> Email accounts</li>
                      <li><i class="bx bx-check"></i> Themes and designs</li>
                      <li><i class="bx bx-check"></i> Curseur personalise</li>
                      <li><i class="bx bx-check"></i> Contact form</li>
                      <li><i class="bx bx-check"></i> Newsletters</li>
                      <li><i class="bx bx-check"></i> Management of reservations and appointments</li>
                      <li><i class="bx bx-check"></i> Online Sales & Shopping cart</li>
                      <li><i class="bx bx-check"></i> Safety and security (SSL, encryptions, captcha)</li>
                      <li><i class="bx bx-check"></i> Maintenance</li>
                      <li><i class="bx bx-check"></i> Customer tech support</li>
                      <li><i class="bx bx-check"></i> Back-End</li>
                      <li><i class="bx bx-check"></i> Referencing management</li>
                      <li><i class="bx bx-check"></i> Advertising</li>
                      <li><i class="bx bx-check"></i> Multilingual</li>
                      <li><i class="bx bx-check"></i> Customer mgmt / Social</li>
                      <li><i class="bx bx-check"></i> E-commerce capabilities</li>
                      <li><i class="bx bx-check"></i> Social Media integration</li>
                      <li class=""><i class="bx bx-check"></i> <span>Documents export (Excel, csv, pdf, etc)</span></li>
                    </ul>
                    
                    </div>
                  </div>
                  
                  <a href="#" class="buy-btn">Get Started</a>
                </div>
              </div>

              <div class="col-lg-4 mt-4 mt-lg-0 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured">
                    
                    <div class="">
                      <h3>Store Website</h3>
                      <h6><sup>$</sup>400 to <sup>$</sup>900</h6>
                    </div>
                  
                  <ul>
                    <li class="px-0 fw-bold text-center">Included Function</li>
                      <li><i class="bx bx-check"></i> landing pages and Optin forms</li>
                      <li><i class="bx bx-check"></i> Images,sliders(image gallery management)</li>
                      <li><i class="bx bx-check"></i>Embedded videos</li>
                      <li><i class="bx bx-check"></i> Navigation and user</li>
                      <li><i class="bx bx-check"></i> friendliness</li>
                      <li><i class="bx bx-check"></i> Save</li>
                      <li><i class="bx bx-check"></i> Improve the speed of the site</li>
                      <li><i class="bx bx-check"></i>10 Page</li>
                      <li><i class="bx bx-check"></i> Shopping</li>
                      <li><i class="bx bx-check"></i>1 Integration</li>
                      
                  </ul>
                  <p>
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Optional Functions
                    </a>
                    
                  </p>
                  <div class="collapse my-3" id="collapseExample">
                    <div class="card card-body">
                    <ul>
                      <li><i class="bx bx-check"></i> Document management</li>
                      <li><i class="bx bx-check"></i> Hosting</li>
                      <li><i class="bx bx-check"></i>30 Go Storage</li>
                      <li><i class="bx bx-check"></i> Sign-up forms, newsletter forms, info-for-product forms</li>
                      <li><i class="bx bx-check"></i> Register/login</li>
                      <li><i class="bx bx-check"></i> Email accounts</li>
                      <li><i class="bx bx-check"></i> Themes and designs</li>
                      <li><i class="bx bx-check"></i> Curseur personalise</li>
                      <li><i class="bx bx-check"></i> Contact form</li>
                      <li><i class="bx bx-check"></i> Newsletters</li>
                      <li><i class="bx bx-check"></i> Management of reservations and appointments</li>
                      <li><i class="bx bx-check"></i> Online Sales & Shopping cart</li>
                      <li><i class="bx bx-check"></i> Safety and security (SSL, encryptions, captcha)</li>
                      <li><i class="bx bx-check"></i> Maintenance</li>
                      <li><i class="bx bx-check"></i> Customer tech support</li>
                      <li><i class="bx bx-check"></i> Back-End</li>
                      <li><i class="bx bx-check"></i> Referencing management</li>
                      <li><i class="bx bx-check"></i> Advertising</li>
                      <li><i class="bx bx-check"></i> Multilingual</li>
                      <li><i class="bx bx-check"></i> Customer mgmt / Social</li>
                      <li><i class="bx bx-check"></i> E-commerce capabilities</li>
                      <li><i class="bx bx-check"></i> Social Media integration</li>
                      <li class=""><i class="bx bx-check"></i> <span>Documents export (Excel, csv, pdf, etc)</span></li>
                    </ul>
                    
                    </div>
                  </div>
                  <a href="#" class="buy-btn">Get Started</a>
                </div>
              </div>

              <div class="col-lg-4 text-center " data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <h3>App</h3>
                  <h6>From <sup>$</sup>1000+ </h6>
                  <ul>
                    <li class="px-0 fw-bold text-center">Included Function</li>
                      <li><i class="bx bx-check"></i> landing pages and Optin forms</li>
                      <li><i class="bx bx-check"></i> Images,sliders(image gallery management)</li>
                      <li><i class="bx bx-check"></i>Embedded videos</li>
                      <li><i class="bx bx-check"></i> Navigation and user</li>
                      <li><i class="bx bx-check"></i> friendliness</li>
                      <li><i class="bx bx-check"></i> Save</li>
                      <li><i class="bx bx-check"></i> Improve the speed of the site</li>
                      <li><i class="bx bx-check"></i>More than 10 page</li>
                      <li><i class="bx bx-check"></i> Shopping</li>
                      <li><i class="bx bx-check"></i>1 Integration</li>
                      
                    </ul>
                  <p>
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Optionnal Functions
                    </a>
                    
                  </p>
                  <div class="collapse my-3" id="collapseExample">
                    <div class="card card-body">
                    <ul>
                      <li><i class="bx bx-check"></i> Document management</li>
                      <li><i class="bx bx-check"></i> Hosting</li>
                      <li><i class="bx bx-check"></i>30 Go Storage</li>
                      <li><i class="bx bx-check"></i> Sign-up forms, newsletter forms, info-for-product forms</li>
                      <li><i class="bx bx-check"></i> Register/login</li>
                      <li><i class="bx bx-check"></i> Email accounts</li>
                      <li><i class="bx bx-check"></i> Themes and designs</li>
                      <li><i class="bx bx-check"></i> Curseur personalise</li>
                      <li><i class="bx bx-check"></i> Contact form</li>
                      <li><i class="bx bx-check"></i> Newsletters</li>
                      <li><i class="bx bx-check"></i> Management of reservations and appointments</li>
                      <li><i class="bx bx-check"></i> Online Sales & Shopping cart</li>
                      <li><i class="bx bx-check"></i> Safety and security (SSL, encryptions, captcha)</li>
                      <li><i class="bx bx-check"></i> Maintenance</li>
                      <li><i class="bx bx-check"></i> Customer tech support</li>
                      <li><i class="bx bx-check"></i> Back-End</li>
                      <li><i class="bx bx-check"></i> Referencing management</li>
                      <li><i class="bx bx-check"></i> Advertising</li>
                      <li><i class="bx bx-check"></i> Multilingual</li>
                      <li><i class="bx bx-check"></i> Customer mgmt / Social</li>
                      <li><i class="bx bx-check"></i> E-commerce capabilities</li>
                      <li><i class="bx bx-check"></i> Social Media integration</li>
                      <li class=""><i class="bx bx-check"></i> <span>Documents export (Excel, csv, pdf, etc)</span></li>
                    </ul>
                    
                    </div>
                  </div>
                  
                  <a href="#" class="buy-btn">Get Started</a>
                </div>
              </div>
                    
            </div>

          </div>

        </div> 
      
      </div><!-- End Pricing Section -->
    </section>
    <!--=============== Website Maintenance=============-->
    <section class="section-bg">  
        <div class="container services-other"  data-aos="fade-up">
            <div class="text-center mb-4">
               <h3 class="fw-bold" id="data"> Maintenance</h3>
            </div>
            <div class="align-items-center gy-3 gx-md-4 flex-md-row d-flex flex-column-reverse">
                <div class=" col-md mx-3 align-items-center p-3"  data-aos="fade-right">
                    <h2 class="fw-light mb-3">Lorem, ipsum dolor. </h2>
                    <p class="lh-lg">
                        A proper website maintenance keeps your website looking great and responsive. Our maintenance team will keep your site up to date. Here are our services:
                        <ul class="enumeration">
                            <li><i class="ri-check-double-line me-2 fs-5 "></i>Content Management</li>
                            <li><i class="ri-check-double-line me-2 fs-5 "></i>Content update (e.g. Address change)</li>
                            <li><i class="ri-check-double-line me-2 fs-5 "></i>Page creation & Update.</li>
                            <li><i class="ri-check-double-line me-2 fs-5 "></i>Website Customization</li>
                            <li><i class="ri-check-double-line me-2 fs-5 "></i>Section update or creation</li>
                            <li><i class="ri-check-double-line me-2 fs-5 "></i>Graphics (section) update</li>
                            <li><i class="ri-check-double-line me-2 fs-5 "></i>Pages content creation & update</li>
                            <li><i class="ri-check-double-line me-2 fs-5 "></i>Web design update & Optimization</li>
                        </ul>
                    </p>
                    <!--a type="button" class="btn  btn-outline-primary mt-3">Subscribe</a-->
                </div>
                <div class=" col-md p-3" data-aos="fade-left">
                    <div class="">
                        <img src="{{asset('img/dataanalytics2.jpg')}}" alt="oups l'image ne s'est pas affiché" class="w-100 shadow rounded-5">
                    </div>
                </div>
               
                
            </div>
            <div class=" align-items-center gy-3 gx-md-4 flex-md-row d-flex flex-column-reverse">
                <div class=" col-md p-3 order-2 order-lg-1" data-aos="fade-left">
                    <div class="">
                        <img src="{{asset('img/dataanalytics.jpg')}}" alt="oups l'image ne s'est pas affiché" class="w-100 shadow rounded-5">
                    </div>
                </div>
                <div class="  order-1 order-lg-2 col-md mx-3 align-items-center p-3"  data-aos="fade-right">
                    <h2 class="fw-light mb-3">Lorem ipsum dolor sit. </h2>
                    <p class="lh-lg">
                    Keeping your website up and running lies on only one thing, that is giving it a proper maintenance. This maintenance goes far into updating the functionality of your website  and to the centent of your website and all this can be possible with our maintenance team. 
                    Our maintenance team will maintain your business website and e-commerce sites in order to make your site remain user friendly. Contact us today!
                       
                    </p>
                    <!--a type="button" class="btn  btn-outline-primary mt-3">Subscribe</a-->
                </div>
                
            </div>
          
            <div class="container">
                <a href="pricing#website-maintenance" type="button" class="  btn btn-primary mt-3 d-block mx-auto w-25 mt-5"  data-aos="zoom-in">Get started Now</a>
            </div>
            
        </div>
        
    </section>

</main>

@endsection('content')