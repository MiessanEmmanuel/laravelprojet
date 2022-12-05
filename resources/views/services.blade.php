@extends('layouts/app')
@extends('layouts/partials/navbarother')
@section('content')

<div class="aboutother-banniere aboutother-banniere-services container-fuild py-5" style="">
   <div class="section-title">
      <h2>Services</h2>
   </div>
</div>

   <main class="services-other">
      <!--===========Website design/development=========-->
    <section>  
        <div class="" data-aos="fade-up"  >
            <div class="text-center mb-4 container" >
               <h2 class="fw-bold" id="web">Website design/development</h2>
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
            
            
            <div class="container">
                <a href="pricing#website-development" type="button" class="  btn btn-primary mt-3 d-block mx-auto w-25 mt-5"  data-aos="zoom-in">Get started Now</a>
            </div>
            
           
        </div>
    </section>
    <!--=============== Website Maintenance=============-->
    <section class="section-bg">  
        <div class="container"  data-aos="fade-up">
            <div class="text-center mb-4">
               <h3 class="fw-bold" id="data">Website Maintenance</h3>
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
    <!--=============== Social media management=============-->
    <section>  
        <div class="container " data-aos="fade-up">
            <div class="text-center mb-4">
               <h3 class="fw-bold" id="media"> Social media management</h3>
            </div>
            <div class=" align-items-center gy-3 gx-md-4 flex-md-row d-flex flex-column-reverse ">
                <div class="order-1 order-lg-2 col-md p-3 align-items-center"  data-aos="fade-right">
                    <h2 class="fw-light mb-3">Grow your social presence</h2>
                    <p class="lh-lg">
                        Qavaa group helps you manage your social presence. We're a mission-driven team that provides satisfactory job to our clients.
                        <ul class="enumeration">
                            <li><i class="ri-check-double-line me-2 fs-5 "></i>More Advertising campaign</li>
                            <li><i class="ri-check-double-line me-2 fs-5 "></i>Referencing management</li>
                            <li><i class="ri-check-double-line me-2 fs-5 "></i>Analysis extraction</li>
                            <li><i class="ri-check-double-line me-2 fs-5 "></i>Chat</li>
                        </ul>
                    </p>
                    <!--a type="button" class="btn  btn-outline-primary mt-3">Subscribe</a-->
                </div>
                <div class="order-2 order-lg-1 col-md p-3" data-aos="fade-left">
                    <div class="">
                        <img src="{{asset('img/social.jpg')}}" alt="oups l'image ne s'est pas affiché" class="w-100">

                    </div>
                </div>
            </div>
            <div class="row">
            <div class = "row  flex-column-reverse  flex-lg-row  jutify-content-between pt-3 ">
                <div class=" order-1 order-lg-2 col-lg-6  mx-auto d-block content" data-aos="fade-left" data-aos-delay="100">
                    <img src="{{asset('img/hero-img.png')}}" alt="oups" class ="w-100 ">
                </div>
                <div class=" col-lg-6  d-flex flex-column  align-self-center  content  " data-aos="fade-right" data-aos-delay="100">
                     <h2 class="fw-light mb-3">Why Qavaa Group</h2>
                    <div class="mt-2">
                        <p class="mt-1 txt-our ">
                            Guaranteed to keep your social media accounts active, with likes and followers <br>
                            <ul class="enumeration">
                                <li><i class="ri-check-double-line me-2 fs-5 "></i> Meeting your satisfaction and making you happy</li>
                                <li><i class="ri-check-double-line me-2 fs-5 "></i> 24/7 support </li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="py-2  ">
                <h2 class="fw-light mb-5 text-center ">We serve everyone</h2>
                <div class=" flex-md-row d-flex flex-column  gy-3 gx-md-4">
                    <div class="col row mx-2 py-3 shadow p-3  rounded website-development">
                        <h5 class=" text-center my-3">Small Business</h5>
                        <div class="col">
                            <p>
                                Grow your business with posting great content on your social media account. Our team can help you with that. Hire us today!
                            </p>
                        </div>
                    </div>
                    <div class="col row mx-2 shadow p-3   rounded website-maintenance">
                        <h5 class=" text-center my-3">Medium Businesses</h5>

                        <div class="col">
                            <p>
                                Level up your business online, we can help you reach more audience that will boast your business.
                            </p>
                        </div>
                    </div>
                    <div class="col row mx-2 shadow p-3  rounded social-management">
                        <h5 class=" text-center my-3">Organizations</h5>
                        <div class="col">
                            <p>
                                Let help your organization manage its social presence with great content and more followers.
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <a href="pricing#social-management" type="button" class="btn btn-primary mt-3 d-block mx-auto w-25 mt-5"  data-aos="zoom-in">Get Started Now</a>
            </div>
        </div>
    </section>
    
   </main>
    


@endsection('content')