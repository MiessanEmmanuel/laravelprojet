    <div class="footer-newsletter ">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4 class = ''>Join Our Newsletter</h4>
            <p>Sign-up for our newsletter to receive useful resources from our team</p>
            <?php  if($title == 'Home'){
              $title = 'contact';
            } ?>
            <form action="{{ strtolower($title)}}" method="post">
              @csrf
              <input type="email" name="newletter_email">
              <input type="submit" value="Subscribe" class="" >
                        
            </form>
                    @error('newletter_email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
          </div>
        </div>
      </div>
      <div class="footer-newletter-bgoverplay">

      </div>
    </div>