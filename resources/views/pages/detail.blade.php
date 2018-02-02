<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>

    <body id="top" class="has-header-search">

        @include('includes.nav')

        <section class="page-title dark-bg ptb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="white-text">Detail</h2>
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active"><a href="#">Hal-Detail</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        

        <!-- blog section start -->
        <section class="blog-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                      <div class="posts-content single-post">

                        <article class="post-wrapper">

                          <header class="entry-header-wrapper clearfix">

                          <div class="entry-header">
                              <h2 class="entry-title">Detail Halaman dan artikel</h2>

                              <div class="entry-meta">
                                  <ul class="list-inline">
                                      <li>
                                          <i class="fa fa-user"></i><a href="#">Puun</a>
                                      </li>

                                      <li>
                                          <i class="fa fa-clock-o"></i><a href="#">Jan 15, 2018</a>
                                      </li>
                                </ul>
                              </div><!-- .entry-meta -->
                            </div>

                          </header><!-- /.entry-header-wrapper -->

                          <div class="thumb-wrapper">
                            <img src="{!!asset('assets/img/blog/blog-1.jpg')!!}" class="img-responsive" alt="" >
                          </div><!-- .post-thumb -->


                          <div class="entry-content">
                            <p align="justify">Lojor teu beunang dipotong,
                                Pondok teu benang disambung,
                                Gede teu beunang dicokot,
                                Leutik teu beunang ditamabah,
                                Mipit kudu amit, ngala kudu menta
                                Ngagedig kudu mewara,
                                Mun neukteuk kudu sateukna,
                                Mun nilas kudu sapasna,
                                Mun ngadeg kudu saclekna,
                                Nu lain dilainkeun, nu aya dienyakeun
                                Ulah gorok ulah linyeok</p>

                            <p align="justify">Nerapkeun hukum ulah kencra kencas,
                                Ulah cuweut kanu hideung,
                                Ulah monteng kanu koneng,
                                Ulah ngilik kanu putih,
                                Ulah neuleu tandingan nenjo paroman,
                                Ulah pandang bulu.<br>

                                Hukum ulah gelang catang,
                                Ulah hukum piraus,
                                Hukum aya kalana perlu ditegaskeun,
                                Hukum aya kalana perlu di tindakeun,
                                Hukum oge aya kalana perlu dibijaksanakeun.<br>

                                Mun hukum kencra kancas,
                                Matak romed cerewed,
                                Pasini eweuh sisina,
                                Pasea eweuh hadean,
                                Tunggal nyarug cohcor mantog,
                                Budak galah jelema nyarak,
                                Datang nu bogana reos.</p>
                          </div><!-- .entry-content -->


                          <footer class="entry-footer">
                            <div class="post-tags">
                              <span class="tags-links">
                                <i class="fa fa-tags"></i><a href="#">Dataset,</a> <a href="#" rel="tag">Organisasi</a>
                              </span>
                            </div> <!-- .post-tags -->

                            <ul class="list-inline right share-post">
                                <li><a href="#"><i class="fa fa-facebook"></i> <span>Share</span></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter"></i> <span>Tweet</span></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus"></i> <span>Plus</span></a>
                                </li>
                            </ul>
                          </footer>

                        </article><!-- /.post-wrapper -->

                        <nav class="single-post-navigation" role="navigation">
                          <div class="row">
                            <!-- Previous Post -->
                            <div class="col-xs-6">
                              <div class="previous-post-link">
                                <a class="waves-effect waves-light" href="#"><i class="fa fa-long-arrow-left"></i>Sebelumnya</a>
                              </div>
                            </div>

                            <!-- Next Post -->
                            <div class="col-xs-6">
                              <div class="next-post-link">
                                <a class="waves-effect waves-light" href="#">Selanjutnya<i class="fa fa-long-arrow-right"></i></a>
                              </div>
                            </div>
                          </div> <!-- .row -->
                        </nav>

                      </div><!-- /.posts-content -->
                    </div><!-- /.col-md-12 -->

                  </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        <!-- blog section end -->



        <!--footer-->
        @include('includes.footer')


        <!-- jQuery -->
        <script src="{!!asset('assets/js/jquery-2.1.3.min.js')!!}"></script>
        <script src="{!!asset('assets/bootstrap/js/bootstrap.min.js')!!}"></script>
        <script src="{!!asset('assets/materialize/js/materialize.min.js')!!}"></script>
        <script src="{!!asset('assets/js/menuzord.js')!!}"></script>
        <script src="{!!asset('assets/js/bootstrap-tabcollapse.min.js')!!}"></script>
        <script src="{!!asset('assets/js/jquery.easing.min.js')!!}"></script>
        <script src="{!!asset('assets/js/imagesloaded.js')!!}"></script>
        <script src="{!!asset('assets/js/instafeed.min.js')!!}"></script>
        <script src="{!!asset('assets/js/jquery.sticky.min.js')!!}"></script>
        <script src="{!!asset('assets/js/smoothscroll.min.js')!!}"></script>
        <script src="{!!asset('assets/js/twitterFetcher.min.js')!!}"></script>
        <script src="{!!asset('assets/js/jquery.stellar.min.js')!!}"></script>
        <script src="{!!asset('assets/js/jquery.shuffle.min.js')!!}"></script>
        <script src="{!!asset('assets/owl.carousel/owl.carousel.min.js')!!}"></script>
        <script src="{!!asset('assets/flexSlider/jquery.flexslider-min.js')!!}"></script>
        <script src="{!!asset('assets/magnific-popup/jquery.magnific-popup.min.js')!!}"></script>
        <script src="{!!asset('assets/js/scripts.js')!!}"></script>
        <script src="{{asset('assets/js/fscr.js')}}"></script>

    </body>
  
</html>