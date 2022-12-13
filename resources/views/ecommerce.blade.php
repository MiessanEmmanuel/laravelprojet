@extends('layouts/app')
@extends('layouts/partials/navbarother')
@section('content')
<div class="aboutother-banniere aboutother-banniere-services container-fuild py-5" style="">
   <div class="section-title">
      <h2>E-commerce</h2>
      </div>
</div>
   <main>
      <section>
         <div class='container' data-aos="fade-up">
            <div class=" membership row ">
               <div class="membership-text col-12 col-lg-7 ">
                  <h4 data-aos="fade-up" >About Qavaa Marketplace</h4>
                  <p>
                     Qavaa Marketplace is an online social networking website with a modern approach that allows users to register for free, 
                     Shop, Buy & sell products or services online, and raise capital 
                     by Online Crowdfunding / Fundraising campaigns to support and grow as a community. <br>

                     Create your user profile by adding basic to advance details, make connections and add other users to your friends list, upon confirmation from other user you can see their updates and message each other.
                  </p>
               </div>
               <div class='membership-img col-12  col-lg-5'>
                  <img src="{{asset('img/dataanalytics.jpg')}}" alt="oups" class="">
               </div>
            </div>
            <div class="row membership ">
               <div class='membership-img col-12 col-lg-5 order-2 order-sm-2 order-lg-1 '>
                  <img src="{{asset('img/dataanalytics2.jpg')}}" alt="oups">
               </div>
               <div class='membership-text col-12 col-lg-7 order-1 order-sm-1 order-lg-2 col-12'>
                  <h4 data-aos="fade-up" id="membership-destination">Membership</h4>
                  <p>
                     If you're thinking of selling online, or expanding your current brick-and-mortar business to include an online component,
                  there are a few things you should keep in mind. First, you'll need to choose the right platform for your needs. 
                  We also offer multivendor marketplace and you can register as a vendor and start selling you product online for free. 

                  </p>
                  <div class="bton">
                     <a class="btn btn-primary" href="https://www.qavaa.com/vendor-register/" data-aos="zoom"  data-aos-delay="100"> Register </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="section-bg lh-lg services-other">
         <div class="container digital-marketing">
            <div class="titre text-center">
               <h2 class="digital-marketing-destination">UNLOCK THE POWER OF DIGITAL MARKETING</h2>
               <p>Unlock the potential of digital marketing to reach new audiences, increase sales, and drive success.</p>
            </div>
            <div>
                  <h4 class="text-light"></h4>
                  <p>
                   Digital marketing is essential for any business that wants to grow and succeed in today’s competitive marketplace.
                   Whether you are a small mom-and-pop shop or a large corporation, digital marketing can help you reach your target customers and achieve your business goals. Here are four reasons why your business needs digital marketing:
                  </p>
            </div>
            <div class=" row  py-2 mx-auto gy-3 gx-md-4 my-4 ">

                    <div class="col-12  row mx-2 py-3 shadow p-3 mb-5  rounded website-development">
                        <h5 class=" text-center my-3"> Reach a wider audience with less effort:</h5>
                        <div class="col">
                            <p>
                            With digital marketing, businesses can communicate with a global audience quickly and easily. You no longer have to rely on print advertisements or expensive TV commercials to reach potential customers; instead, you can use cost-effective digital channels like email, social media, and search engines to reach them. Additionally, it is important to make sure that your content is optimized for search engines so that potential customers can easily find you when they are searching for businesses like yours.                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md row mx-2 shadow p-3 mb-5 rounded website-maintenance">
                        <h5 class=" text-center my-3"> Cost-effective: </h5>
                    
                        <div class="col">
                            <p>
                            Digital marketing is one of the most cost-effective ways to promote your business. It allows you to reach a large number of people at a fraction of the cost of traditional advertising methods like television or print ads.                            
                           </p>
                        </div>
                    </div>
                    <div class="col-12 col-md   mx-2 shadow p-3 mb-5  rounded social-management">
                        <h5 class=" text-center my-3"> Measurable: </h5>
                        <div class="">
                            <p>
                            One of the great things about digital marketing is that it is extremely easy to track and measure. This allows you to see which campaigns are generating the most leads and sales and adjust your strategy accordingly.
                           </p>
                            
                        </div>
                    </div>
                </div>
                <div class=" py-2 flex-md-row d-flex flex-column  gy-3 gx-md-4 ">
                    <div class="col-12 col-md   mx-2 py-3 shadow p-3 mb-5 rounded website-development">
                        <h5 class=" text-center my-3">Targeted:</h5>
                        <div class="">
                            <p>
                            Digital marketing allows you to target your ads to a specific audience. For example, if you sell products for women, you can use Facebook advertising to target women in your area. This ensures that your ads are being seen by people who are most likely to be interested in your products or services.
                           </p>
                        </div>
                    </div>
                    <div class="col-12 col-md   mx-2 shadow p-3 mb-5  rounded website-maintenance">
                        <h5 class=" text-center my-3">Flexible</h5>

                        <div class="">
                            <p>
                              Digital marketing is very flexible, which means that you can tailor your campaigns to suit your specific needs and goals. For example, if you want to generate more leads, you can run a targeted ad campaign on Facebook. Or, if you want to increase sales, you can run a special promotion on your website.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md   mx-2 shadow p-3 mb-5 rounded social-management">
                        <h5 class=" text-center my-3">Instant</h5>
                        <div class="">
                            <p>
                              Unlike traditional marketing methods like television or print ads, which can take weeks or even months to plan and execute, digital marketing is almost instantaneous. This means that you can get your message out there quickly and start generating leads and sales right away 
                           </p>
                            
                        </div>
                    </div>
                </div>
         </div>
      </section>
   </main>


@endsection('content')

@section('newsletter')
  @include('layouts/partials/footer')
@endsection('newsletter')
