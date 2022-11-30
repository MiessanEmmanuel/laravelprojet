
<header id="headerother" class="">


<div class="container d-flex  justify-content-between">

<img src="{{asset('img/Qavaaconsulting.png')}}" alt="oups" class ="logo mb-2">
  <!-- Uncomment below if you prefer to use an image logo -->
  <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

  <nav id="navbar" class="navbar ">
    <ul class="navbar_others">
      <li><a class="nav-link scrollto" href="/">Home</a></li>
      <li><a class="nav-link scrollto {{$value_menu_about?? ''}}" href="about">About</a></li>
      <li><a class="nav-link scrollto {{$value_menu_service?? ''}}" href="service">Services</a></li>
      <li><a class="nav-link scrollto {{$value_menu_pricing?? ''}}" href="pricing">Pricing</a></li>
      <li><a class="nav-link scrollto {{$value_menu_contact?? ''}}" href="contact">Contact</a></li>
      
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
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav-->

  </div> 
</header><!-- End Header -->