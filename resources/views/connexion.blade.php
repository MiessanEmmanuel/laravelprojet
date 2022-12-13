<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qavaa|Login</title>
</head>
<body>
    







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
