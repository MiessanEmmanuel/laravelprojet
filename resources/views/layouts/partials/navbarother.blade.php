
<header id="header" class="headerother ">


<div class="container d-flex  justify-content-between">

<a href="/" class="logo me-auto"><img src="{{asset('img/clients/Qavaa-Group.png')}}" alt="oups" class ="logo mb-2" style="width: 150px;"></a>
  <!-- Uncomment below if you prefer to use an image logo -->
  <!-- <img src="assets/img/logo.png" alt="" class="img-fluid">-->

  <nav id="navbar" class="navbar ">
    <ul class="navbar_others">
      <li><a class="nav-link scrollto" href="/">Home</a></li>
      <li><a class="nav-link scrollto {{$value_menu_about?? ''}}" href="about">About</a></li>
      <li class="dropdown"><a class="nav-link scrollto {{$value_menu_ecommerce?? ''}}" href="ecommerce"><span>E-commerce</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Membership</a></li>
              <li><a href="#">Digital Marketing</a></li>
            </ul>
      </li>
      <li class="dropdown"><a class="nav-link scrollto {{$value_menu_consulting?? ''}} " href="consulting"><span>Consulting</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="consulting#web">Web Design</a></li>
              <li><a href="consulting#data">Maintenance</a></li>
            </ul>
      </li>
      <!--li class="dropdown"><a class="nav-link scrollto {{$value_menu_socialwork?? ''}}" href="socialwork"><span>Social Work</span><i class="bi bi-chevron-down"></i> </a>
            <ul>
              <li><a href="#">Our initiatives</a></li>
            </ul>
      </li-->
      <li><a class="nav-link scrollto {{$value_menu_contact?? ''}}" href="contact">Contact</a></li>
      <!--li class="dropdown"><a href="#"><span>More</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto {{$value_menu_service?? ''}}" href="service">Services</a></li>
              <li><a class="nav-link scrollto {{$value_menu_pricing?? ''}}" href="pricing">Pricing</a></li>
            </ul>
      </li-->

            
      
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav><!-- .navbar -->

</div>
<!--nav class="navbar navbar-expand-lg navbar-light bg-light">
<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container  d-flex justify-content-between">
        <div class="">
            <img src="{{asset('img/Qavaaconsulting.png')}}" alt="oups" class ="logo mb-2">
        </div>
        
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav  mb-2 mb-lg-0">
                <li class="nav-item">
                 <a class="nav-link  scrollto" href="Home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  scrollto" href="about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  scrollto" href="service">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  scrollto" href="pricing">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  scrollto" href="contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
 
</nav-->

  </div> 
</header><!-- End Header -->