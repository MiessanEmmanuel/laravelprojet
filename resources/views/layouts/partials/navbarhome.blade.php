
<header id="header" class="fixed-top ">
  
    <div class="container d-flex  justify-content-between">

    <a href="/" class="logo me-auto"><img src="{{asset('img/clients/Qavaa-Group.png')}}" alt="oups"  style="width: 150px;"></a>
      

      <nav id="navbar" class="navbar ">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="/about">About</a></li>
          <li class="dropdown"><a class="nav-link scrollto {{$value_menu_ecommerce?? ''}}" href="/ecommerce"><span>E-commerce</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/ecommerce#membership-destination">Membership</a></li>
              <li><a href="/ecommerce#digital-marketing-destination">Digital Marketing</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="nav-link scrollto {{$value_menu_consulting?? ''}} " href="/consulting"><span>Consulting</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="/consulting#web">Web Design</a></li>
                  <li><a href="/consulting#data">Maintenance</a></li>
                </ul>
          </li>
          <!--li class="dropdown"><a class="nav-link scrollto {{$value_menu_socialwork?? ''}}" href="socialwork"><span>Social Work</span><i class="bi bi-chevron-down"></i> </a>
                <ul>
                  <li><a href="#">Our initiatives</a></li>
                </ul>
          </li-->
          <li><a class="nav-link scrollto {{$value_menu_contact?? ''}}" href="/contact">Contact</a></li>
      </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->