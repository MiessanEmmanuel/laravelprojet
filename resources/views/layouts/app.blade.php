<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qavaa | {{ $title??"" }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('img/apple-touch-icon.jpg')}}" rel="icon" style="width: 32px;height: 32px;">
    <link href="{{asset('img/apple-touch-icon.jpg')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <style>
      body{
        box-sizing: border-box;
        
      }
    </style>
</head>
<body>

@yield('content')


  <!-- ======= Footer ======= -->
  <footer id="footer">

    @yield('newsletter')

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact footer-links">
          <a href="/" class="logo me-auto"><img src="{{asset('img/clients/Qavaa-Group.png')}}" alt="oups"  style="width: 150px;"></a>
            <p>
            <br>
              <strong>Phone:</strong><a  target="_blank" rel="noopener noreferrer"> +1 410 929 7684<br>
              <strong>Email:</strong><a href="mailto:info@qavaa.com"  target="_blank" rel="noopener noreferrer" > info@qavaa.com</a> <br>
            </p>
          </div>
          
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/apply">Apply</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Partner with us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Our initiatives</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/ecommerce">E-Commerce</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/consulting">Consulting</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/socialwork">Social Work</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Join us on our different social networks</p>
            <div class="social-links mt-3">
              <a href="https://twitter.com/OfficialQavaa" class="twitter" target="_blank" rel="noopener noreferrer"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/Qavaa" class="facebook" target="_blank" rel="noopener noreferrer"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/qavaa_official/?next=%2F" target="_blank" rel="noopener noreferrer" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Qavaa</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="/">Qavaaconsulting</a>
      </div>
    </div>
  
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/aos/aos.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script>
 
      //alert("@error('newletter_email') {{  $message}}  @enderror ");
    
   
    
    (function() {
        "use strict";
      


      

        /**
         * Easy selector helper function
         */
        const select = (el, all = false) => {
          el = el.trim()
          if (all) {
            return [...document.querySelectorAll(el)]
          } else {
            return document.querySelector(el)
          }
        }
      
        /**
         * Easy event listener function
         */
        const on = (type, el, listener, all = false) => {
          let selectEl = select(el, all)
          if (selectEl) {
            if (all) {
              selectEl.forEach(e => e.addEventListener(type, listener))
            } else {
              selectEl.addEventListener(type, listener)
            }
          }
        }
      
        /**
         * Easy on scroll event listener 
         */
        const onscroll = (el, listener) => {
          el.addEventListener('scroll', listener)
        }
      
        /**
         * Navbar links active state on scroll
         */
        let navbarlinks = select('#navbar .scrollto', true)
        const navbarlinksActive = () => {
          let position = window.scrollY + 200
          navbarlinks.forEach(navbarlink => {
            if (!navbarlink.hash) return
            let section = select(navbarlink.hash)
            if (!section) return
            if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
              navbarlink.classList.add('active')
            } else {
              navbarlink.classList.remove('active')
            }
          })
        }
        window.addEventListener('load', navbarlinksActive)
        onscroll(document, navbarlinksActive)
      
        /**
         * Scrolls to an element with header offset
         */
        const scrollto = (el) => {
          let header = select('#header')
          let offset = header.offsetHeight
      
          let elementPos = select(el).offsetTop
          window.scrollTo({
            top: elementPos - offset,
            behavior: 'smooth'
          })
        }
      
        /**
         * Toggle .header-scrolled class to #header when page is scrolled
         */
        let selectHeader = select('#header')
        if (selectHeader) {
          const headerScrolled = () => {
            if (window.scrollY > 100) {
              selectHeader.classList.add('header-scrolled')
            } else {
              selectHeader.classList.remove('header-scrolled')
            }
          }
          window.addEventListener('load', headerScrolled)
          onscroll(document, headerScrolled)
        }
      
        /**
         * Back to top button
         */
        let backtotop = select('.back-to-top')
        if (backtotop) {
          const toggleBacktotop = () => {
            if (window.scrollY > 100) {
              backtotop.classList.add('active')
            } else {
              backtotop.classList.remove('active')
            }
          }
          window.addEventListener('load', toggleBacktotop)
          onscroll(document, toggleBacktotop)
        }
      
        /**
         * Mobile nav toggle
         */
        on('click', '.mobile-nav-toggle', function(e) {
          select('#navbar').classList.toggle('navbar-mobile')
          this.classList.toggle('bi-list')
          this.classList.toggle('bi-x')
        })
      
        /**
         * Mobile nav dropdowns activate
         */
        on('click', '.navbar .dropdown > a', function(e) {
          if (select('#navbar').classList.contains('navbar-mobile')) {
            e.preventDefault()
            this.nextElementSibling.classList.toggle('dropdown-active')
          }
        }, true)
      
        /**
         * Scrool with ofset on links with a class name .scrollto
         */
        on('click', '.scrollto', function(e) {
          if (select(this.hash)) {
            e.preventDefault()
      
            let navbar = select('#navbar')
            if (navbar.classList.contains('navbar-mobile')) {
              navbar.classList.remove('navbar-mobile')
              let navbarToggle = select('.mobile-nav-toggle')
              navbarToggle.classList.toggle('bi-list')
              navbarToggle.classList.toggle('bi-x')
            }
            scrollto(this.hash)
          }
        }, true)
      
        /**
         * Scroll with ofset on page load with hash links in the url
         */
        window.addEventListener('load', () => {
          if (window.location.hash) {
            if (select(window.location.hash)) {
              scrollto(window.location.hash)
            }
          }
        });
      
        /**
         * Preloader
         */
        let preloader = select('#preloader');
        if (preloader) {
          window.addEventListener('load', () => {
            preloader.remove()
          });
        }
      
        /**
         * Initiate  glightbox 
         */
        const glightbox = GLightbox({
          selector: '.glightbox'
        });
      
        /**
         * Skills animation
         */
        let skilsContent = select('.skills-content');
        if (skilsContent) {
          new Waypoint({
            element: skilsContent,
            offset: '80%',
            handler: function(direction) {
              let progress = select('.progress .progress-bar', true);
              progress.forEach((el) => {
                el.style.width = el.getAttribute('aria-valuenow') + '%'
              });
            }
          })
        }
      
        /**
         * Porfolio isotope and filter
         */
        window.addEventListener('load', () => {
          let portfolioContainer = select('.portfolio-container');
          if (portfolioContainer) {
            let portfolioIsotope = new Isotope(portfolioContainer, {
              itemSelector: '.portfolio-item'
            });
      
            let portfolioFilters = select('#portfolio-flters li', true);
      
            on('click', '#portfolio-flters li', function(e) {
              e.preventDefault();
              portfolioFilters.forEach(function(el) {
                el.classList.remove('filter-active');
              });
              this.classList.add('filter-active');
      
              portfolioIsotope.arrange({
                filter: this.getAttribute('data-filter')
              });
              portfolioIsotope.on('arrangeComplete', function() {
                AOS.refresh()
              });
            }, true);
          }
      
        });
      
        /**
         * Initiate portfolio lightbox 
         */
        const portfolioLightbox = GLightbox({
          selector: '.portfolio-lightbox'
        });
      
        /**
         * Portfolio details slider
         */
        new Swiper('.portfolio-details-slider', {
          speed: 400,
          loop: true,
          autoplay: {
            delay: 5000,
            disableOnInteraction: false
          },
          pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
          }
        });
      
        /**
         * Animation on scroll
         */
        window.addEventListener('load', () => {
          AOS.init({
            duration: 1000,
            easing: "ease-in-out",
            once: true,
            mirror: false
          });
        });
      
      })()
      
  </script>
<!--script type="text/javascript">
  function toto(e) {
    activedLink = e.target.href;
    array = navbar_others.getElementsByTagName("a");
    for (i=0; i<array.length; i++) {
    if ( array[i].href != activedLink )
            array[i].style.color = "blue";
        else array[i].style.color = "tomato";
        }
    myFrame.src = activedLink;
  }
</script-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
