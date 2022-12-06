
<header id="header" class="fixed-top ">
  
    <div class="container d-flex  justify-content-between">

    <img src="{{asset('img/Qavaaconsulting.png')}}" alt="oups" class ="logo mb-2">
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar ">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Home</a></li>
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
                  <li><a href="#">App Design</a></li>
                  <li><a href="consulting#data">Maintenance</a></li>
                </ul>
          </li>
          <li class="dropdown"><a class="nav-link scrollto {{$value_menu_socialwork?? ''}}" href="socialwork"><span>Social Work</span><i class="bi bi-chevron-down"></i> </a>
                <ul>
                  <li><a href="#">Our initiative</a></li>
                </ul>
          </li>
          <li class="dropdown"><a href="#"><span>More</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a class="nav-link scrollto {{$value_menu_service?? ''}}" href="service">Services</a></li>
                  <li><a class="nav-link scrollto {{$value_menu_pricing?? ''}}" href="pricing">Pricing</a></li>
                  <li><a class="nav-link scrollto {{$value_menu_contact?? ''}}" href="contact">Contact</a></li>
                </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->