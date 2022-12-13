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

        <div class="services-other lh-lg" data-aos="fade-up"  >
            <div class="text-center mb-4 container" >
               <h2 class="fw-bold" id="web">Experience the best of web design</h2>
            </div>
            <div class="container align-items-center gy-3 gx-md-4 flex-md-row d-flex flex-column-reverse ">
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
                    <h2 class="fw-light mb-3">Good quality of service</h2>
                    <p class="lh-lg">
                    Our website design/development involves responsiveness, nice looking site. Our team of
                     developers are skilled in various programming languages your project may require and are also skilled in Wordpress. 
                     
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
            <h2  class="text-center">Website Creation</h2>
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
    <section class="section-bg lh-lg">  
        <div class="container services-other"  data-aos="fade-up">
            <div class="text-center mb-5">
               <h3 class="fw-bold" id="data"> Get your website running smoothly</h3>
            </div>
            <div class="align-items-center gy-3 gx-md-4 row my-5">
                <div class=" col-lg col-12 mx-3 align-items-center p-3"  data-aos="fade-right">
                    <h2 class="fw-light mb-3">Web Maintenance Service </h2>
                    <p class="lh-lg">
                    As a business owner, you know the importance of keeping your website and apps up and running. But what if they're not running as smoothly as they should? In this situation, 
                    your website needs maintainance. Web and App maintenance is crucial to keeping your site or app running smoothly and avoiding common issues that can occur. However, it's important to remember that maintenance is an ongoing process, not a one-time event.
                     Qavaa Group can help you create a comprehensive maintenance plan that will keep your site or app running optimally and help you avoid common pitfalls.
                    </p>
                    <!--a type="button" class="btn  btn-outline-primary mt-3">Subscribe</a-->
                </div>
                <div class=" col-12 col-lg p-3" data-aos="fade-left">
                    
                        <img src="{{asset('img/dataanalytics2.jpg')}}" alt="oups l'image ne s'est pas affiché" class="w-100 shadow rounded-5">
                    
                </div>
               
                
            </div>
            <div class=" align-items-center gy-3 gx-md-4 row my-4">
              <div class="text-center">
                <h2 class="fw-light my-3">Why you should keep your website up-to-date</h2>
                <p class="text-center">Your website is like your business card. It’s one of the first things potential customers will see, so you want to make sure it’s up-to-date and reflects well on your business. Here are a few reasons why you should keep your website up-to-date:</p>
              </div>
               <div class="row mt-5">
                  <div class="col-12 col-md-12 col-lg  mx-2 shadow p-3 mb-5  rounded website-maintenance">
                        <h5 class=" text-center my-3">It Keeps You Competitive </h5>
                        <p>
                          If your website is looking dated, it can make potential customers think your business is, too. Keeping your site up-to-date shows that you’re keeping up with the latest trends and technologies.              
                        </p>
                  </div>
                  <div class="col-12 col-md-12 col-lg mx-2 shadow p-3 mb-5  rounded website-maintenance">
                        <h5 class=" text-center my-3">It Improves Customer Experience </h5>
                        <p>
                          A dated website can be hard to navigate and may not work well on mobile devices. This can cause potential customers to leave your site without ever contacting you. By keeping your site up-to-date, you can ensure that customers have a positive experience and are more likely to contact you.
                        </p>
                  </div>
                  <div class="col-12  col-md-12 col-lg mx-2 shadow p-3 mb-5  rounded website-maintenance">
                        <h5 class=" text-center my-3">It Makes You Look Professional</h5>
                        <p>
                          First impressions matter, and a dated website can give potential customers the wrong impression. An outdated website can make you look like you don’t care about your business or that you’re not willing to invest in it. Keeping your site up-to-date shows that you take pride in your business and are serious about providing a quality product or service.
                        </p>
                  </div>
        
               </div>
                
            </div>
            
        </div>
        <div id="pricing" class="pricing pricing-other">
                <div id="website-maintenance" class="container" data-aos="fade-up">

                  <div class="text-center">
                    <h2 class="text-center">Website maintenance</h2>
                    <p >The following are our pricing systems</p>
                  </div>
                  <div class="maintenance">
                      <div class="row mt-5 py-2   gy-3 gx-md-4 ">
                        <div class="col-12 col-lg row  mx-2 py-3 shadow p-3 mb-5  rounded website-development">
                            <h5 class=" text-center mt-3">Lite</h5>
                            <h6 class="light mb-3 text-center">From <sup>$</sup>69.99 </h6>
                            <div class="col">
                              <p class=" mx-auto">Ideal for small websites that do not need continuous updates. Regular maintenance of the various components of the website will keep it going.</p>

                            </div>
                        </div>
                        <div class="col-12 col-lg row mx-2 shadow p-3 mb-5 rounded website-maintenance">
                            <h5 class=" text-center mt-3">Medium</h5>
                            <h6 class="light mb-3 text-center">From <sup>$</sup>79.99 </h6>
                            <div class="col">
                                <p>
                                  Perfect for small websites that need just a bit of help with standard monthly maintenance. Essential Maintenance and content Management for your website.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-lg row mx-2 shadow p-3 mb-5  rounded social-management">
                            <h5 class=" text-center mt-3">Premium</h5>
                            <h6 class="light mb-3 text-center">From <sup>$</sup>99.99 </h6>
                            <div class="col">
                                <p>
                                  Ideal for websites that are growing and need support services that go beyond the basics. Includes unlimited website edits and security setup.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-lg row  mx-2 py-3 shadow p-3 mb-5  rounded website-development">
                            <h5 class=" text-center mt-3">Custom</h5>
                            <h6 class="light mb-3 text-center">From <sup>$</sup>149.99 </h6>
                            <div class="col">
                              <p class=" mx-auto">
                                Ideal for larger websites that need priority support, plus maintenance for E-Commerce, membership sites, and websites with advanced functionality.
                              </p>

                            </div>
                        </div>
                      </div>
                      
                      <!--div class="container Maintenance">
                        <h3 class=" text-center my-3 fs-4">Maintenance</h3>
                        <div class="row ">

                          <div class="col-lg col-6 text-center " data-aos="fade-up" data-aos-delay="100">
                            <div class="box">
                              <h3> Lite Maintenance</h3>
                              <ul>
                                <li class="px-0 fw-bold text-center"> Basic Maintenance</li>
                                    <li><i class="bx bx-check"></i> Domain & Hosting Assistance</li>
                                    <li><i class="bx bx-check"></i>Web Hosting</li>
                                    <li><i class="bx bx-check"></i>Image Optimisation</li>
                                    <li><i class="bx bx-check"></i>Broken links check and fix</li>
                                    <li><i class="bx bx-check"></i>WordPress Core & Plugin Update</li>
                                
                                <li class="px-0 fw-bold text-center">Web Scan & Health Check (Add-on)</li>
                                  <li class="na"><i class="bi bi-dash-lg"></i> Website Health Check</li> 
                                  <li class="na"><i class="bi bi-dash-lg"></i>Scan Website For Malicious Issues</li>

                                <li class="px-0 fw-bold text-center">Backup & Code fixes (Add-on) </li>
                                  <li class="na"><i class="bi bi-dash-lg"></i>Content Delivery Network</li>
                                  <li class="na"><i class="bi bi-dash-lg"></i>Daily Backups</li>
                                  <li class="na"><i class="bi bi-dash-lg"></i>Mobile responsive check</li>
                                  <li class="na"><i class="bi bi-dash-lg"></i>Code fixes</li>
                                  

                                <li class="px-0 fw-bold text-center">Monitoring & Optimization </li>
                                  <li class="na"><i class="bx bx-x"></i><span> Website Speed Optimization</span></li>
                                  <li class="na"><i class="bx bx-x"></i><span>Website downtime monitoring</span></li>
                                  <li class="na"><i class="bx bx-x"></i><span>Site security monitoring</span></li>
                                  <li class="na"><i class="bx bx-x"></i><span>Plugin/patches updates</span></li>
                                  
                                <li class="px-0 fw-bold text-center">Theme Updates & Server troubleshooting</li>
                                  <li class="na"><i class="bx bx-x"></i><span>Theme Updates</span></li>
                                  <li class="na"><i class="bx bx-x"></i><span>Trouble Shooting Server Issues</span></li>
                              </ul>
                              <a href="#" class="buy-btn">Get Started</a>
                            </div>
                          </div>
                          <div class="col-lg col-6 mt-4 mt-lg-0 text-center" data-aos="fade-up" data-aos-delay="200">
                            <div class="box featured">
                              <h3> Medium Maintenance</h3>
                              <ul>
                                <li class="px-0 fw-bold text-center"> Basic Maintenance</li>
                                    <li><i class="bx bx-check"></i> Domain & Hosting Assistance</li>
                                    <li><i class="bx bx-check"></i>Web Hosting</li>
                                    <li><i class="bx bx-check"></i>Image Optimisation</li>
                                    <li><i class="bx bx-check"></i>Broken links check and fix</li>
                                    <li><i class="bx bx-check"></i>WordPress Core & Plugin Update</li>
                                
                                <li class="px-0 fw-bold text-center">Web Scan & Health Check (Add-on)</li>
                                  <li><i class="bx bx-check"></i> Website Health Check</li>
                                  <li><i class="bx bx-check"></i>Scan Website For Malicious Issues</li>

                                <li class="px-0 fw-bold text-center">Backup & Code fixes (Add-on) </li>
                                  <li class="na"><i class="bi bi-dash-lg"></i>Content Delivery Network</li>
                                  <li class="na"><i class="bi bi-dash-lg"></i>Daily Backups</li>
                                  <li class="na"><i class="bi bi-dash-lg"></i>Mobile responsive check</li>
                                  <li class="na"><i class="bi bi-dash-lg"></i>Code fixes</li>
                                  

                                <li class="px-0 fw-bold text-center">Monitoring & Optimization </li>
                                  <li class="na"><i class="bx bx-x"></i><span> Website Speed Optimization</span></li>
                                  <li class="na"><i class="bx bx-x"></i><span>Website downtime monitoring</span></li>
                                  <li class="na"><i class="bx bx-x"></i><span>Site security monitoring</span></li>
                                  <li class="na"><i class="bx bx-x"></i><span>Plugin/patches updates</span></li>
                                  
                                <li class="px-0 fw-bold text-center">Theme Updates & Server troubleshooting</li>
                                  <li class="na"><i class="bx bx-x"></i><span>Theme Updates</span></li>
                                  <li class="na"><i class="bx bx-x"></i><span>Trouble Shooting Server Issues</span></li>
                              </ul>
                              <a href="#" class="buy-btn">Get Started</a>
                            </div>
                          </div>
                       
                          <div class=" text-center col-6 col-lg" data-aos="fade-up" data-aos-delay="100">
                            <div class="box">
                              <h3> Premium Maintenance</h3>
                              <ul>
                                <li class="px-0 fw-bold text-center"> Basic Maintenance</li>
                                    <li><i class="bx bx-check"></i> Domain & Hosting Assistance</li>
                                    <li><i class="bx bx-check"></i>Web Hosting</li>
                                    <li><i class="bx bx-check"></i>Image Optimisation</li>
                                    <li><i class="bx bx-check"></i>Broken links check and fix</li>
                                    <li><i class="bx bx-check"></i>WordPress Core & Plugin Update</li>
                                  
                                <li class="px-0 fw-bold text-center">Web Scan & Health Check (Add-on)</li>
                                  <li><i class="bx bx-check"></i> Website Health Check</li>
                                  <li><i class="bx bx-check"></i>Scan Website For Malicious Issues</li>

                                <li class="px-0 fw-bold text-center">Backup & Code fixes (Add-on) </li>
                                  <li><i class="bx bx-check"></i>Content Delivery Network</li>
                                  <li><i class="bx bx-check"></i>Daily Backups</li>
                                  <li><i class="bx bx-check"></i>Mobile responsive check</li>
                                  <li class="na"><i class="bi bi-dash-lg"></i>Code fixes</li>
                                  

                                <li class="px-0 fw-bold text-center">Monitoring & Optimization </li>
                                  <li><i class="bx bx-check"></i>Website Speed Optimization</li>
                                  <li><i class="bx bx-check"></i>Website downtime monitoring</li>
                                  <li><i class="bx bx-check"></i>Site security monitoring</li>
                                  <li><i class="bx bx-check"></i>Plugin/patches updates</li>
                                  
                                <li class="px-0 fw-bold text-center">Theme Updates & Server troubleshooting</li>
                                  <li class="na"><i class="bx bx-x"></i><span>Theme Updates</span></li>
                                  <li class="na"><i class="bx bx-x"></i><span>Trouble Shooting Server Issues</span></li>
                              </ul>
                            
                              
                              <a href="#" class="buy-btn">Get Started</a>
                            </div>
                          </div>
                          <div class=" text-center col-6 col-lg" data-aos="fade-up" data-aos-delay="100">
                            <div class="box">
                              <h3> Lite Maintenance</h3>
                              <ul>
                                <li class="px-0 fw-bold text-center"> Basic Maintenance</li>
                                    <li><i class="bx bx-check"></i> Domain & Hosting Assistance</li>
                                    <li><i class="bx bx-check"></i>Web Hosting</li>
                                    <li><i class="bx bx-check"></i>Image Optimisation</li>
                                    <li><i class="bx bx-check"></i>Broken links check and fix</li>
                                    <li><i class="bx bx-check"></i>WordPress Core & Plugin Update</li>
                                
                                <li class="px-0 fw-bold text-center">Web Scan & Health Check (Add-on)</li>
                                  <li class="na"><i class="bi bi-dash-lg"></i> Website Health Check</li> 
                                  <li class="na"><i class="bi bi-dash-lg"></i>Scan Website For Malicious Issues</li>

                                <li class="px-0 fw-bold text-center">Backup & Code fixes (Add-on) </li>
                                  <li class="na"><i class="bi bi-dash-lg"></i>Content Delivery Network</li>
                                  <li class="na"><i class="bi bi-dash-lg"></i>Daily Backups</li>
                                  <li class="na"><i class="bi bi-dash-lg"></i>Mobile responsive check</li>
                                  <li class="na"><i class="bi bi-dash-lg"></i>Code fixes</li>
                                  

                                <li class="px-0 fw-bold text-center">Monitoring & Optimization </li>
                                  <li class="na"><i class="bx bx-x"></i><span> Website Speed Optimization</span></li>
                                  <li class="na"><i class="bx bx-x"></i><span>Website downtime monitoring</span></li>
                                  <li class="na"><i class="bx bx-x"></i><span>Site security monitoring</span></li>
                                  <li class="na"><i class="bx bx-x"></i><span>Plugin/patches updates</span></li>
                                  
                                <li class="px-0 fw-bold text-center">Theme Updates & Server troubleshooting</li>
                                  <li class="na"><i class="bx bx-x"></i><span>Theme Updates</span></li>
                                  <li class="na"><i class="bx bx-x"></i><span>Trouble Shooting Server Issues</span></li>
                              </ul>
                              <a href="#" class="buy-btn">Get Started</a>
                            </div>
                          </div>
                                
                        </div>

                      </div--><!--end div Maintenance-->
                      <!--div class="container Content Management">
                        <h3 class=" text-center mt-5 mb-3 fs-4 ">Content Management</h3>
                        <div class="row">

                          <div class="col-lg text-center " data-aos="fade-up" data-aos-delay="100">
                            <div class="box">
                              <h3>Lite Content Management</h3>
                              <ul>
                                <li class="px-0 fw-bold text-center">Content Updates</li>
                                  <li class="na"><i class="bi bi-dash-lg"></i>New Product Upload</li>
                                  <li class="na" ><i class="bi bi-dash-lg"></i>Content update (e.g. Address change)</li>
                                
                                <li class="px-0 fw-bold text-center">Section update or creation</li>
                                  <li class="na"><i class="bx bx-x"></i><span> Content (section) Creation</span></li> 
                                  <li class="na"><i class="bx bx-x"></i><span> Graphics (section) update</span></li>

                              
                                  
                              </ul>
                              <a href="#" class="buy-btn">Get Started</a>
                            </div>
                          </div>

                          <div class="col-lg text-center " data-aos="fade-up" data-aos-delay="100">
                            <div class="box">
                              <h3> Medium Content Management</h3>
                              <ul>
                                <li class="px-0 fw-bold text-center">Content Updates</li>
                                    <li><i class="bx bx-check"></i>Content update (e.g. Address change)</li>
                                    <li><i class="bx bx-check"></i>New Product Upload</li>
                                    
                                <li class="px-0 fw-bold text-center">Section update or creation</li>
                                  <li class="na"><i class="bx bx-x"></i><span>Content (section) Creation</span> </li> 
                                  <li class="na"><i class="bx bx-x"></i><span>Graphics (section) update</span></li>

                              
                                  
                              </ul>
                              <a href="#" class="buy-btn">Get Started</a>
                            </div>
                          </div>

                          <div class="col-lg text-center " data-aos="fade-up" data-aos-delay="100">
                            <div class="box">
                              <h3> Premium Content Management</h3>
                              <ul>
                                <li class="px-0 fw-bold text-center">Content Updates</li>
                                    <li><i class="bx bx-check"></i>Content update (e.g. Address change)</li>
                                    <li><i class="bx bx-check"></i>New Product Upload</li>
                                    
                                <li class="px-0 fw-bold text-center">Section update or creation</li>
                                  <li><i class="bx bx-check"></i> Content (section) Creation</li> 
                                  <li><i class="bx bx-check"></i>Graphics (section) update</li>

                              
                                  
                              </ul>
                              <a href="#" class="buy-btn">Get Started</a>
                            </div>
                          </div>
                          <div class="col-lg text-center " data-aos="fade-up" data-aos-delay="100">
                            <div class="box">
                              <h3>Lite Content Management</h3>
                              <ul>
                                <li class="px-0 fw-bold text-center">Content Updates</li>
                                  <li class="na"><i class="bi bi-dash-lg"></i>New Product Upload</li>
                                  <li class="na" ><i class="bi bi-dash-lg"></i>Content update (e.g. Address change)</li>
                                
                                <li class="px-0 fw-bold text-center">Section update or creation</li>
                                  <li class="na"><i class="bx bx-x"></i><span> Content (section) Creation</span></li> 
                                  <li class="na"><i class="bx bx-x"></i><span> Graphics (section) update</span></li>

                              
                                  
                              </ul>
                              <a href="#" class="buy-btn">Get Started</a>
                            </div>
                          </div>
                        </div>

                      </div--><!--end div Content Management-->
                      <div class="container Content_Management">
                        <h3 class=" text-center  mt-5 mb-3  fs-4 ">Website Customization Works</h3>
                        <div class="row">

                          <div class="col-lg col-md-12 col-12 mt-4 mt-lg-0 text-center " data-aos="fade-up" data-aos-delay="100">
                            <div class="box">
                              <h3> Lite Website Customization Works</h3>
                              <ul>
                                <li class="px-0 fw-bold text-center"> Page creation & Update</li>
                                    <li class="na"><i class="bx bx-x"></i><span> Page creation (1 per year)</span></li>
                                    <li class="na"><i class="bx bx-x"></i><span>Pages content creation & update</span> </li>
                                    
                                <li class="px-0 fw-bold text-center"> Web design update & Optimization</li>
                                    <li class="na"><i class="bx bx-x"></i><span> Graphic design & update</span> </li>
                                    <li class="na"><i class="bx bx-x"></i><span> Code Optimization</span> </li>
                                  
                              </ul>
                              <a href="#" class="buy-btn">Get Started</a>
                            </div>
                          </div>

                          
                          <div class="col-lg col-md-12 col-12 mt-4 mt-lg-0  text-center " data-aos="fade-up" data-aos-delay="100">
                            <div class="box">
                              <h3> Medium Website Customization Works</h3>
                              <ul>
                                <li class="px-0 fw-bold text-center"> Page creation & Update</li>
                                    <li class="na"><i class="bi bi-dash-lg"></i>Page creation (1 per year)</li>
                                    <li class="na"><i class="bx bx-x"></i><span>Pages content creation & update</span> </li>
                                    
                                <li class="px-0 fw-bold text-center"> Web design update & Optimization</li>
                                    <li class="na"><i class="bx bx-x"></i><span> Graphic design & update</span> </li>
                                    <li class="na"><i class="bx bx-x"></i><span> Code Optimization</span> </li>

                              
                                  
                              </ul>
                              <a href="contact#contact-destination" class="buy-btn">Get Started</a>
                            </div>
                          </div>

                        
                          <div class="col-lg col-md-12 col-12 mt-4 mt-lg-0  text-center " data-aos="fade-up" data-aos-delay="100">
                            <div class="box">
                              <h3> Premium Website Customization Works</h3>
                              <ul>
                                <li class="px-0 fw-bold text-center"> Page creation & Update</li>
                                    <li><i class="bx bx-check"></i>Page creation (2 per year)</li>
                                    <li><i class="bx bx-check"></i>Pages content creation & update</li>
                                    
                                <li class="px-0 fw-bold text-center">Web design update & Optimization</li>
                                    <li class="na"><i class="bx bx-x"></i><span> Graphic design & update</span> </li>
                                    <li class="na"><i class="bx bx-x"></i><span> Code Optimization</span> </li>

                              
                                  
                              </ul>
                              <a href="contact#contact-destination" class="buy-btn">Get Started</a>
                            </div>
                          </div>
                            
                          <div class="col-lg col-md-12 col-12 mt-4 mt-lg-0  text-center " data-aos="fade-up" data-aos-delay="100">
                            <div class="box">
                              <h3> Custom Website Customization Works</h3>
                              <ul>
                                <li class="px-0 fw-bold text-center"> Page creation & Update</li>
                                    <li><i class="bx bx-check"></i>Page creation (4 per year)</li>
                                    <li><i class="bx bx-check"></i>Pages content creation & update</li>
                                    
                                <li class="px-0 fw-bold text-center">Web design update & Optimization</li>
                                <li><i class="bx bx-check"></i><span> Graphic design & update</span> </li>
                                <li><i class="bx bx-check"></i><span> Code Optimization</span> </li>

                              
                                  
                              </ul>
                              <a href="contact#contact-destination" class="buy-btn">Get Started</a>
                            </div>
                          </div>
                        </div><!--end div row-->

                      </div><!--end div Content Management-->
                    
                  </div>
                </div>
            </div>
    </section>

</main>

@endsection('content')

@section('newsletter')
  @include('layouts/partials/footer')
@endsection('newsletter')
