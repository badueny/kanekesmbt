<!DOCTYPE html>
<html lang="{!!app()->getLocale()!!}">
    <head>
        @include('includes.head')
        
    </head>

    <body id="top" class="has-header-search">

         @include('includes.nav')
        
         <!--Section-Slide-->
         @include('includes.sliderhome') 
        
        <section class="section" style="background-color: #000828;">
           <div class="row col-md-12" style="background-color: #000828;">
              <h2 class="text-uppercase text-center white-text">Temukan Data Disini</h2>
               <div class="col-md-2"></div>
                <div class="col-md-8">
                  <div class="widget widget_search">
                            <form role="search" method="get" class="search-form" >
                              <input type="text" class="form-control" value="" name="search" id="search" placeholder="Cari Data, Tema dan Organisasi...">
                              <button type="submit" class="btn search-btn blue"><i class="fa fa-search"></i></button>
                            </form>
                  </div><!-- /.widget_search -->
              </div>
              <div class="col-md-2"></div>
           </div>
       </section>

        


        <section class="" style="background-image: url(assets/img/bground.jpg);">
            
              <div class="row no-gutter"><!-- /.row1 -->
                  <div class="col-md-1 col-sm-2"></div>
                  <div class="col-md-2 col-sm-2">
                      <div class="featured-box lighten-2 text-center z-depth-1">
                        <div class="featured-wrapper">
                          <div class="intro-header">
                              <i class="material-icons white-text">class</i>
                              <h4 class="white-text">Pendidikan</h4>
                          </div>
                          <div class="content white-text">
                            <p><a href="/halaman">Lihat <i class="fa fa-long-arrow-right"></i></a></p>
                          </div>
                        </div><!-- /.featured-wrapper -->
                      </div><!-- /.featured-box  -->
                  </div><!-- /.col-md-3 -->

                  <div class="col-md-2 col-sm-6">
                      <div class="featured-box text-center z-depth-1">
                        <div class="featured-wrapper">
                          <div class="intro-header">
                              <i class="material-icons white-text">local_pharmacy</i>
                              <h4 class="white-text">Kesehatan</h4>
                          </div>
                            <div class="content white-text">
                            <p><a href="/halaman">Selengkapnya <i class="fa fa-long-arrow-right"></i></a></p>
                          </div>
                        </div><!-- /.featured-wrapper -->
                      </div><!-- /.featured-box  -->
                  </div><!-- /.col-md-3 -->

                  <div class="col-md-2 col-sm-6">
                      <div class="featured-box lighten-2 text-center z-depth-1">
                        <div class="featured-wrapper">
                          <div class="intro-header">
                              <i class="fa fa-money white-text"></i>
                              <h4 class="white-text">Keuangan</h4>
                          </div>

                          <div class="content white-text">
                            <p><a href="/halaman">Selengkapnya <i class="fa fa-long-arrow-right"></i></a></p>
                          </div>
                        </div><!-- /.featured-wrapper -->
                      </div><!-- /.featured-box  -->
                  </div><!-- /.col-md-3 -->                  

                  <div class="col-md-2 col-sm-6">
                      <div class="featured-box text-center z-depth-1">
                        <div class="featured-wrapper">
                          <div class="intro-header">
                              <i class="material-icons white-text">fingerprint</i>
                              <h4 class="white-text">Kependudukan</h4>
                          </div>
                          <div class="content white-text">
                            <p><a href="/halaman">Selengkapnya <i class="fa fa-long-arrow-right"></i></a></p>
                          </div>
                        </div><!-- /.featured-wrapper -->
                      </div><!-- /.featured-box  -->
                  </div><!-- /.col-md-3 -->

                  <div class="col-md-2 col-sm-6">
                      <div class="featured-box text-center z-depth-1">
                        <div class="featured-wrapper">
                          <div class="intro-header">
                              <i class="material-icons white-text">directions</i>
                              <h4 class="white-text">Perhubungan</h4>
                          </div>
                          <div class="content white-text">
                            <p><a href="/halaman">Selengkapnya <i class="fa fa-long-arrow-right"></i></a></p>
                          </div>
                        </div><!-- /.featured-wrapper -->
                      </div><!-- /.featured-box  -->
                  </div><!-- /.col-md-3 -->
                  <div class="col-md-1 col-sm-2"></div>
              </div><!-- /.row1 -->

              <div class="row no-gutter"><!-- /.row2 -->
                  <div class="col-md-1 col-sm-2"></div>
                  <div class="col-md-2 col-sm-2">
                      <div class="featured-box lighten-2 text-center z-depth-1">
                        <div class="featured-wrapper">
                          <div class="intro-header">
                              <i class="material-icons white-text">local_florist</i>
                              <h4 class="white-text">Linkungan Hidup</h4>
                          </div>
                          <div class="content white-text">
                            <p><a href="/halaman">Lihat <i class="fa fa-long-arrow-right"></i></a></p>
                          </div>
                        </div><!-- /.featured-wrapper -->
                      </div><!-- /.featured-box  -->
                  </div><!-- /.col-md-3 -->

                  <div class="col-md-2 col-sm-6">
                      <div class="featured-box text-center z-depth-1">
                        <div class="featured-wrapper">
                          <div class="intro-header">
                              <i class="material-icons white-text">local_library</i>
                              <h4 class="white-text">Pariwisata <br> Kebudayaan</h4>
                          </div>
                            <div class="content white-text">
                            <p><a href="/halaman">Selengkapnya <i class="fa fa-long-arrow-right"></i></a></p>
                          </div>
                        </div><!-- /.featured-wrapper -->
                      </div><!-- /.featured-box  -->
                  </div><!-- /.col-md-3 -->

                  <div class="col-md-2 col-sm-6">
                      <div class="featured-box lighten-2 text-center z-depth-1">
                        <div class="featured-wrapper">
                          <div class="intro-header">
                              <i class="material-icons white-text">local_activity</i>
                              <h4 class="white-text">Sosial</h4>
                          </div>

                          <div class="content white-text">
                            <p><a href="/halaman">Selengkapnya <i class="fa fa-long-arrow-right"></i></a></p>
                          </div>
                        </div><!-- /.featured-wrapper -->
                      </div><!-- /.featured-box  -->
                  </div><!-- /.col-md-3 -->                  

                  <div class="col-md-2 col-sm-6">
                      <div class="featured-box text-center z-depth-1">
                        <div class="featured-wrapper">
                          <div class="intro-header">
                              <i class="material-icons white-text">business</i>
                              <h4 class="white-text">Pekerjaan Umum</h4>
                          </div>
                          <div class="content white-text">
                            <p><a href="/halaman">Selengkapnya <i class="fa fa-long-arrow-right"></i></a></p>
                          </div>
                        </div><!-- /.featured-wrapper -->
                      </div><!-- /.featured-box  -->
                  </div><!-- /.col-md-3 -->

                  <div class="col-md-2 col-sm-6">
                      <div class="featured-box text-center z-depth-1">
                        <div class="featured-wrapper">
                          <div class="intro-header">
                              <i class="material-icons white-text">child_care</i>
                              <h4 class="white-text">Penanggulangan <br>Bencana</h4>
                          </div>
                          <div class="content white-text">
                            <p><a href="/halaman">Selengkapnya <i class="fa fa-long-arrow-right"></i></a></p>
                          </div>
                        </div><!-- /.featured-wrapper -->
                      </div><!-- /.featured-box  -->
                  </div><!-- /.col-md-3 -->
                  <div class="col-md-1 col-sm-2"></div>
              </div><!-- /.row2 -->
              <div class="row"></div>
              <div class="row"></div>
              <div class="row"></div>
            </div><!-- /.container -->
        </section>


        <section class="section-padding ">
            <div class="container">
              <div class="row">
                <div class="col-md-6 counter-section mb-sm-50">
                  <ul class="count-plus-box">
                    <li>
                        <i class="material-icons brand-color">data_usage</i>
                        <span class="timer">320</span>
                        <span class="count-description">Dataset</span>
                    </li>
                    <li>
                        <i class="material-icons brand-color">&#xE886;</i>
                        <span class="timer">220</span>
                        <span class="count-description">Group</span>
                    </li>
                    <li>
                        <i class="material-icons brand-color">account_balance</i>
                        <span class="timer">145</span>
                        <span class="count-description">Instansi</span>
                    </li>
                    <li>
                        <i class="material-icons brand-color">&#xE2C4;</i>
                        <span class="timer">140</span>
                        <span class="count-description">Download</span>
                    </li>
                  </ul>
                </div>

                <div class="col-md-6">
                    <h2 class="text-bold text-uppercase mb-30"></h2>
                    <div class="border-tab primary-nav kanekes-demo-tab">

                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li role="presentation" class="active"><a href="#tab-10" class="waves-effect waves-dark"  role="tab" data-toggle="tab">DATASET</a></li>
                        <li role="presentation"><a href="#tab-11" class="waves-effect waves-dark" role="tab" data-toggle="tab">GROUP</a></li>
                        <li role="presentation"><a href="#tab-12" class="waves-effect waves-dark" role="tab" data-toggle="tab">ORGANISASI</a></li>
                      </ul>

                      <!-- Tab panes -->
                      <div class="panel-body">
                        <div class="tab-content">
                          <div role="tabpanel" class="tab-pane fade in active" id="tab-10">
                              <p>Dataset Terbaru</p>

                              <p><a href="/detil">Lihat</a></p>
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab-11">
                              <p>Group yang Paling Banyak Memiliki Dataset</p>

                              <p><a href="/detil">Lihat</a></p>
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab-12">
                              <p>Organisasi yang Paling Banyak Memiliki Dataset</p>

                              <p><a href="/detil">Lihat</a></p>
                          </div>
                        </div>
                      </div>
                    </div><!-- /.border-bottom-tab -->
                </div>
              </div>
            </div><!-- /.container -->
        </section>

        <section class="section-padding grid-news-hover bg-fixed parallax-bg overlay dark-5" data-stellar-background-ratio="0.5" style="background-image: url('assets/img/blog/gazebo_baduy.jpg'); ">
            <div class="container">

	            <div class="text-center mb-80">
	                <h2 class="section-title text-uppercase white-text">Press Realease</h2>
	                <p class="section-sub white-text">Info baru</p>
	            </div>

              <div class="row">
                <div class="col-md-4">
                    <article class="post-wrapper">

                      <div class="thumb-wrapper waves-effect waves-block waves-light">
                        <a href="artikel-detail.html"><img src="{{asset('assets/img/kanekes/blog-8.jpg')}}" class="img-responsive" alt="" ></a>
                        <div class="post-date blue">
                            01<span>Jan</span>
                        </div>
                      </div><!-- .post-thumb -->

                      <div class="blog-content">

                        <div class="hover-overlay blue"></div>

                        <header class="entry-header-wrapper">
                          <div class="entry-header">
                            <h2 class="entry-title"><a href="artikel-detail.html">Artikel satu</a></h2>

                            <div class="entry-meta">
                                <ul class="list-inline">
                                    <li>
                                        By <a href="#">Admin</a>
                                    </li>
                                    <li>
                                        In <a href="#">Dataset</a>
                                    </li>
                                </ul>
                            </div><!-- .entry-meta -->
                          </div><!-- /.entry-header -->
                        </header><!-- /.entry-header-wrapper -->

                        <div class="entry-content">
                          <p>Deskripsi Artikel satu</p>
                        </div><!-- .entry-content -->

                      </div><!-- /.blog-content -->

                    </article><!-- /.post-wrapper -->
                </div><!-- /.col-md-4 -->

                <div class="col-md-4">
                    <article class="post-wrapper">

                      <div class="thumb-wrapper waves-effect waves-block waves-light">
                        <a href="artikel-detail.html"><img src="{{asset('assets/img/kanekes/blog-7.jpg')}}" class="img-responsive" alt="" ></a>
                        <div class="post-date blue">
                            27<span>Jan</span>
                        </div>
                      </div><!-- .post-thumb -->

                      <div class="blog-content">

                        <div class="hover-overlay blue"></div>

                        <header class="entry-header-wrapper">
                          <div class="entry-header">
                            <h2 class="entry-title"><a href="artikel-detail.html">Artikel Dua</a></h2>

                            <div class="entry-meta">
                                <ul class="list-inline">
                                    <li>
                                        By <a href="#">Admin</a>
                                    </li>
                                    <li>
                                        In <a href="#">Organisasi</a>
                                    </li>
                                </ul>
                            </div><!-- .entry-meta -->
                          </div><!-- /.entry-header -->
                        </header><!-- /.entry-header-wrapper -->

                        <div class="entry-content">
                          <p>Deskripsi Artikel dua</p>
                        </div><!-- .entry-content -->

                      </div><!-- /.blog-content -->

                    </article><!-- /.post-wrapper -->
                </div><!-- /.col-md-4 -->

                <div class="col-md-4">
                    <article class="post-wrapper">

                      <div class="thumb-wrapper waves-effect waves-block waves-light">
                        <a href="artikel-detail.html"><img src="{{asset('assets/img/kanekes/blog-9.jpg')}}" class="img-responsive" alt="" ></a>
                        <div class="post-date blue">
                            25<span>Jan</span>
                        </div>
                      </div><!-- .post-thumb -->

                      <div class="blog-content">

                        <div class="hover-overlay blue"></div>

                        <header class="entry-header-wrapper">
                          <div class="entry-header">
                            <h2 class="entry-title"><a href="artikel-detail.html">Artikel Tiga</a></h2>

                            <div class="entry-meta">
                                <ul class="list-inline">
                                    <li>
                                        By <a href="#">Admin</a>
                                    </li>
                                    <li>
                                        In <a href="#">General</a>
                                    </li>
                                </ul>
                            </div><!-- .entry-meta -->
                          </div><!-- /.entry-header -->
                        </header><!-- /.entry-header-wrapper -->

                        <div class="entry-content">
                          <p>Deskripsi Artikel Tiga</p>
                        </div><!-- .entry-content -->

                      </div><!-- /.blog-content -->

                    </article><!-- /.post-wrapper -->
                </div><!-- /.col-md-4 -->
              </div><!-- /.row -->

            </div><!-- /.container -->
        </section>

        


      @include('includes.footer')
      @include('includes.jshome')



    </body>
  
</html>