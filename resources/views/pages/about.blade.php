<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
        <link href="assets/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
        <link href="assets/owl.carousel/assets/owl.theme.default.min.css" rel="stylesheet">
        
    </head>

    <body id="top" class="has-header-search">

          @include('includes.nav')


        <!--page title start-->
        <section class="page-title dark-bg ptb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="white-text">Tentang</h2>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><a href="#">Tentang Satu data</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>



        <section class="padding-top-90 padding-bottom-70">
            <div class="container">
              <div class="row">
                <div class="col-md-12">

                    <div class="border-bottom-tab">

                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab-1"  role="tab" class="waves-effect waves-dark" data-toggle="tab">Tentang</a></li>
                        <li role="presentation"><a href="#tab-2" role="tab" class="waves-effect waves-dark" data-toggle="tab">Dasar Hukum</a></li>
                        <li role="presentation"><a href="#tab-3" role="tab" class="waves-effect waves-dark" data-toggle="tab">Tujuan</a></li>
                        
                      </ul>

                      <!-- Tab panes -->
                      <div class="panel-body">
                        <div class="tab-content">
                          <div role="tabpanel" class="tab-pane fade in active" id="tab-1">
                              <img class="alignleft" src="{!!asset('assets/img/satuabout.png')!!}" alt="">
                              <p>Portal ini berisi data public, lembaga pemerintahan daerah, dan semua instansi lain yang terkait yang menghasilkan data yang berhubungan dengan Provinsi Banten.</p>
                              <p><span style="line-height: 1.428571429;">Satu Data Banten adalah sebuah inisiatif untuk meningkatkan kualitas dan pemanfaatan data pemerintah. Pemanfaatan data pemerintah tidak terbatas pada penggunaannya untuk pengambilan kebijakan, tetapi juga sebagai bentuk pemenuhan kebutuhan data publik bagi masyarakat. Data tersedia dalam format terbuka dan mudah digunakan kembali </span></p>
                              
                              <hr />
                              <p>Portal Satu Data Banten diinisiasi oleh Diskominfosp sebagai salah satu komitmen pemprov dalam <em>Open Government Partnership</em>.</p>
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab-2">
                              <img class="alignleft" src="{!!asset('assets/img/legal.png')!!}" alt="">
                              <p>Seluruh kumpulan data yang ada di dalam portal ini dikategorikan sebagai domain publik sehingga tidak diperkenankan mengandung informasi yang mengandung rahasia negara, rahasia pribadi atau hal-hal lainnya yang diatur dalam Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik.</p>
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab-3">
                              <img class="alignleft" src="assets/img/mission.png" alt="">
                              <p>Untuk meningkatkan transparansi dan akuntabilitas pemerintah, serta untuk meningkatkan partisipasi masyarakat dalam mengawal pembangunan.</p>
                              <p>Kami menyediakan data dalam format yang mudah dicari, diakses serta digunakan dengan harapan pengguna situs dapat memanfaatkan data yang tersedia di sini seluas-luasnya dan seinovatif mungkin demi terwujudnya Provinsi Banten yang lebih baik.</p>
                          </div>
                          
                        </div>
                      </div>

                    </div><!-- /.border-bottom-tab -->

                </div><!-- /.col-md-12 -->
              </div><!-- /.row -->
            </div><!-- /.container -->
        </section>

        <hr>

        <section class="section-padding banner-6 bg-fixed parallax-bg overlay light-9" data-stellar-background-ratio="0.5">
            <div class="container">
              <div class="featured-carousel brand-dot">
                  <div class="featured-item border-box radius-4 hover brand-hover">
                      <div class="icon mb-30">
                          <i class="material-icons brand-icon">&#xE32A;</i>
                      </div>
                      <div class="desc">
                          <h2>Open Data Public</h2>
                          <p>Lojor teu meunang dipotong, pendek teu meunang disambung.</p>
                      </div>
                  </div><!-- /.featured-item -->

                  <div class="featured-item border-box radius-4 hover brand-hover">
                      <div class="icon mb-30">
                          <i class="material-icons brand-icon">&#xE851;</i>
                      </div>
                      <div class="desc">
                          <h2>Data Update</h2>
                          <p>Lojor teu meunang dipotong, pendek teu meunang disambung.</p>
                      </div>
                  </div><!-- /.featured-item -->

                  <div class="featured-item border-box radius-4 hover brand-hover">
                      <div class="icon mb-30">
                          <i class="material-icons brand-icon">&#xE8AF;</i>
                      </div>
                      <div class="desc">
                          <h2>Public Hospitality</h2>
                          <p>Lojor teu meunang dipotong, pendek teu meunang disambung.</p>
                      </div>
                  </div><!-- /.featured-item -->

                  <div class="featured-item border-box radius-4 hover brand-hover">
                      <div class="icon mb-30">
                          <i class="material-icons brand-icon">&#xE91D;</i>
                      </div>
                      <div class="desc">
                          <h2>Kemudahan Informasi</h2>
                          <p>Lojor teu meunang dipotong, pendek teu meunang disambung.</p>
                      </div>
                  </div><!-- /.featured-item -->
                 </div>
              </div><!-- /.container -->
        </section>


        


        

         <!--footer--> 
         @include('includes.footer')

        <!-- jQuery -->
        <script src="assets/js/jquery-2.1.3.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/materialize/js/materialize.min.js"></script>
        <script src="assets/js/menuzord.js"></script>
        <script src="assets/js/bootstrap-tabcollapse.min.js"></script>
        <script src="assets/js/jquery.easing.min.js"></script>
        <script src="assets/js/jquery.sticky.min.js"></script>
        <script src="assets/js/smoothscroll.min.js"></script>
        <script src="assets/js/imagesloaded.js"></script>
        <script src="assets/js/jquery.stellar.min.js"></script>
        <script src="assets/js/jquery.inview.min.js"></script>
        <script src="assets/owl.carousel/owl.carousel.min.js"></script>
        <script src="assets/flexSlider/jquery.flexslider-min.js"></script>
        <script src="assets/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/scripts.js"></script>
    </body>
  
</html>