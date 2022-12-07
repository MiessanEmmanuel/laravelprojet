@extends('layouts/app')
@extends('layouts/partials/navbarother')
@section('content')
<div class="aboutother-banniere aboutother-banniere-contact container-fuild py-5">
      <div class="section-title">
         <h2>{{ $title}}</h2>
      </div>
    </div>
<main class="contact-other">
   <section id="ville_contact" class="section-bg pb-0 pb-md-5 content" data-aos="fade-up" data-aos-delay="100">
      <div class="pt-5 py-md-5 ville_contact_titre text-dark position-relative mx-auto mb-2 ">
         <div class="text-center py-5">
            <h3>Ready to scale up your business?</h3>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
         </div>
         <div class="w-75  mx-auto d-md-none d-block ">
          <!--block des ville sur mobile -->
          <div class="d-flex flex-column justify-content-between py-5 mx-auto w-100 " data-aos="zoom-in" data-aos-delay="100">
                <div class="ville_contact1 rounded-3 w-md-25 w-75 text-dark  mx-auto my-2  p-0">
                  <div class="container pt-2 mb-3">
                      <img  src="{{asset('img/cta-bg.jpg')}}" alt="" class="w-100 rounded-3">
                      <h4 class="mt-3">Abidjan</h4>
                  </div>
                  <div class="container">
                      <p class=" ">
                        <a href="#" claas="text-decoration-none">lorem@gmail.com</a> <br>
                        <a href="#">(+255) 075 232 44</a>
                      </p>
                  </div>
                </div>
                <div class="ville_contact2 rounded-3 w-75 text-dark  mx-auto my-2 " data-aos="zoom-in" data-aos-delay="100">
                    <div class="container pt-2 mb-3">
                      <img  src="{{asset('img/cta-bg.jpg')}}" alt="" class="w-100 rounded-3">
                      <h4 class="mt-3">New-york</h4>
                    </div>
                    <div class="container">
                      <p class=" ">
                        <a href="#" claas="text-decoration-none">lorem@gmail.com</a> <br>
                        <a href="#">(+255) 075 232 44</a>
                      </p>
                  </div>
                </div>
                <div class="ville_contact3 rounded-3 w-75 text-dark mx-auto my-2 " data-aos="zoom-in" data-aos-delay="100">
                   <div class="container pt-2 mb-3">
                      <img  src="{{asset('img/cta-bg.jpg')}}" alt="" class="w-100 rounded-3">
                      <h4 class="mt-3">Paris</h4>
                    </div>
                    <div class="container">
                      <p class="">
                        <a href="#" claas="text-decoration-none">lorem@gmail.com</a> <br>
                        <a href="#">(+255) 075 232 44</a>
                      </p>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="py-5  mb-5  d-none d-md-block">
        <!--block des ville sur pc -->
        <div class="w-75 w-md-100 w-lg-75 position-relative mx-auto  " >
          <div class="d-flex justify-content-center  py-5 mx-auto w-100 position-absolute top-0 start-0  translate-middle-y ">
                <div class="ville_contact1 rounded-3 w-md-25 w-25 text-dark mx-4  p-0" style="white-space:wrap;" data-aos="fade-right">
                  <div class="container pt-2 mb-3">
                      <img  src="{{asset('img/cta-bg.jpg')}}" alt="" class="w-100 rounded-3">
                      <h4 class="mt-3">Abidjan</h4>
                  </div>
                  <div class="container">
                      <p class=" text-start">
                        <a href="#" claas="text-decoration-none">lorem@gmail.com</a> <br>
                        <a href="#">(+255) 075 232 44</a>
                      </p>
                  </div>
                </div>
                <div class="ville_contact2 rounded-3 w-25 mx-4  text-dark  " data-aos="zoom-in">
                    <div class="container pt-2 mb-3">
                      <img  src="{{asset('img/cta-bg.jpg')}}" alt="" class="w-100 rounded-3">
                      <h4 class="mt-3">New-york</h4>
                    </div>
                    <div class="container">
                      <p class=" text-start">
                        <a href="#" claas="text-decoration-none">lorem@gmail.com</a> <br>
                        <a href="#">(+255) 075 232 44</a>
                      </p>
                  </div>
                </div>
                <div class="ville_contact3 rounded-3 w-25 mx-4  text-dark " data-aos="fade-left">
                    <div class="container pt-2 mb-3">
                      <img  src="{{asset('img/cta-bg.jpg')}}" alt="" class="w-100 rounded-3">
                      <h4 class="mt-3">Lagos</h4>
                    </div>
                    <div class="container">
                      <p class=" text-start">
                        <a href="#" claas="text-decoration-none">lorem@gmail.com</a> <br>
                        <a href="#">(+255) 075 232 44</a>
                      </p>
                  </div>
                </div>
            </div>
          </div>
        </div>
   </section>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3>Fill Out This Form Below, To reach us for your request.</h3>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch ">
            <div class="info" style="overflow: hidden;">
              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 60%;" allowfullscreen></iframe>
              
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="contact" method="post" role="form" class="php-email-form">
              @csrf
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="first_name">First Name</label>
                  <input type="text" name="first_name" class="form-control" id="first_name" required>
                  @error('first_name')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group col-md-6">
                  <label for="last_name">Last Name</label>
                  <input type="text" name="last_name" class="form-control" id="last_name" required>
                  @error('last_name')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group col-md-6">
                  <label for="email">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                  @error('email')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group col-md-6">
                  <label for="phone">Phone</label>
                  <input type="phone" name="phone" class="form-control" id="phone" required>
                  @error('phone')
                      <div class="text-danger">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-group col-md-6">
                  <label for="company">Company/Organization</label>
                  <input type="text" class="form-control" name="company" id="company" required>
                  @error('company')
                      <div class="text-danger">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-group col-md-6">
                  <label for="website">Website</label>
                  <input type="text" name="website" class="form-control" id="website" required>
                </div>
              </div>
              <div class="form-floating">
                <select class="form-select" id="floatingSelect" aria-label="What Are You Looking For" name="service">
                  <option selected>Open this selection</option>
                  <option value="1">Website design</option>
                  <option value="2">Website Maintenance</option>
                  <option value="3">Social Management</option>
                </select>
                <label for="floatingSelect">What Are You Looking For</label>
                @error('service')
                      <div class="text-danger">{{$message}}</div>
                  @enderror
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="10" required></textarea>
                  @error('message')
                      <div class="text-danger">{{$message}}</div>
                  @enderror
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
     <!-- ======= Frequently Asked Questions Section ======= -->
    <!-- ((((((((  TESTIMONIALS  ))))))))))section id="faq" class="faq ">
      <div class="container" data-aos="fade-up">

        <div class="skills ">
          <div class="section-title content">
            <h3>Testimonials</h3>
          </div>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section--><!-- End Frequently Asked Questions Section -->

</main>



@endsection('content')