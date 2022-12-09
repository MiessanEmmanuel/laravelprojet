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
               <div class="membership-text col-7">
                  <h4 data-aos="fade-up" >About Qavaa Marketplace</h4>
                  <p>
                     Qavaa Marketplace is an online social networking website with a modern approach that allows users to register for free, 
                     Shop, Buy & sell products or services online, and raise capital 
                     by Online Crowdfunding / Fundraising campaigns to support and grow as a community. <br>

                     Create your user profile by adding basic to advance details, make connections and add other users to your friends list, upon confirmation from other user you can see their updates and message each other.
                  </p>
               </div>
               <div class='membership-img col-5'>
                  <img src="{{asset('img/dataanalytics.jpg')}}" alt="oups">
               </div>
            </div>
            <div class="row membership ">
               <div class='membership-img col-5'>
                  <img src="{{asset('img/dataanalytics2.jpg')}}" alt="oups">
               </div>
               <div class='membership-text col-7'>
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
      <section class="section-bg">
         <div class="container digital-marketing">
            <div class="titre text-center">
               <h2 class="">UNLOCK THE POWER OF DIGITAL MARKETING</h2>
               <p>Unlock the potential of digital marketing to reach new audiences, increase sales, and drive success.</p>
            </div>
            <div>
                  <h4 class="text-light"></h4>
                  <p>
                   Digital marketing is essential for any business that wants to grow and succeed in today’s competitive marketplace.
                   Whether you are a small mom-and-pop shop or a large corporation, digital marketing can help you reach your target customers and achieve your business goals. Here are four reasons why your business needs digital marketing:
                  </p>
            </div>

         </div>
      </section>
   </main>


@endsection('content')