<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
        <link href="{!!asset('assets/css/sc/login.css')!!}" rel="stylesheet">
       


    </head>

    <body>
                

        <section class="section-padding banner-wrapper login-alt banner-6 fullscreen-banner">
            <div class="container">

                <div class="login-wrapper">
                  <div class="card-wrapper"></div>
                  <div class="card-wrapper">
                    <h1 class="title">Login</h1>
                    <form>
                      <div class="input-container">
                        <input type="text" id="username" required="required"/>
                        <label for="username">Username</label>
                        <div class="bar"></div>
                      </div>
                      <div class="input-container">
                        <input type="password" id="password" required="required"/>
                        <label for="password">Password</label>
                        <div class="bar"></div>
                      </div>
                      <div class="button-container">
                        <a href="#." class="btn btn-lg btn-block waves-effect waves-light">Login</a>
                      </div>
                      <div class="footer"><a href="#">Forgot your password?</a></div>
                      
                      
                        <a href="/" class="btn btn-lg btn-block white waves-effect waves-red">Home</a>
                     
                    </form>

                  </div>
                  
                  <div class="card-wrapper alt">
                    <div class="toggle"></div>
                    <h1 class="title">Register
                      <div class="close"></div>
                    </h1>
                    <form>
                      <div class="input-container">
                        <input type="text" id="newusername" required="required"/>
                        <label for="newusername">Username</label>
                        <div class="bar"></div>
                      </div>
                      <div class="input-container">
                        <input type="password" id="newpassword" required="required"/>
                        <label for="newpassword">Password</label>
                        <div class="bar"></div>
                      </div>
                      <div class="input-container">
                        <input type="password" id="repeat-password" required="required"/>
                        <label for="repeat-password">Repeat Password</label>
                        <div class="bar"></div>
                      </div>
                      <div class="button-container">
                        <a href="#." class="btn btn-lg btn-block white waves-effect waves-red">Registar</a>
                      </div>
                    </form>
                  </div>
                  
                </div>

            </div>
        </section>


        !-- Preloader -->
        <div id="preloader">
          <div class="preloader-position"> 
            <img src="{{asset('assets/img/icon/satudataicon.png')}}" alt="logo" >
            <div class="progress">
              <div class="indeterminate"></div>
            </div>
          </div>
        </div>
        <!-- End Preloader --> 
       

        <!-- jQuery -->
        <script src="assets/js/jquery-2.1.3.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/materialize/js/materialize.min.js"></script>
        <script src="assets/js/menuzord.js"></script>
        <script src="assets/js/jquery.easing.min.js"></script>
        <script src="assets/js/jquery.sticky.min.js"></script>
        <script src="assets/js/smoothscroll.min.js"></script>
        <script src="assets/js/jquery.stellar.min.js"></script>
        <script src="assets/js/imagesloaded.js"></script>
        <script src="assets/js/animated-headline.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="{{asset('assets/js/fscr.js')}}"></script>
        <script>
            $('.toggle').on('click', function() {
              $('.login-wrapper').stop().addClass('active');
            });

            $('.close').on('click', function() {
              $('.login-wrapper').stop().removeClass('active');
            });

        </script>
    
    </body>
  
</html>