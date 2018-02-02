<!-- jQuery -->
        <script src="{{asset('assets/js/jquery-2.1.3.min.js')}}"></script>
        <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/materialize/js/materialize.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
        <script src="{{asset('assets/js/smoothscroll.min.js')}}"></script>
        <script src="{{asset('assets/js/menuzord.js')}}"></script>
        <script src="{{asset('assets/js/equalheight.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap-tabcollapse.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.inview.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.countTo.min.js')}}"></script>
        <script src="{{asset('assets/js/imagesloaded.js')}}"></script>
        <script src="{{asset('assets/js/jquery.shuffle.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>
        <script src="{{asset('assets/flexSlider/jquery.flexslider-min.js')}}"></script>
        <script src="{{asset('assets/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.easypiechart.js')}}"></script>
        <script src="{{asset('assets/js/fscr.js')}}"></script>
        <script src="{{asset('assets/js/scripts.js')}}"></script>

        <!-- RS5.0 Core JS Files -->
        <script src="{{asset('assets/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script src="{{asset('assets/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

        <!-- RS5.0 Init  -->
        <script type="text/javascript">
            jQuery(document).ready(function() {
               jQuery(".materialize-slider").revolution({
                    sliderType:"standard",
                    sliderLayout:"fullwidth",
                    delay:9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "gyges",
                            enable: false,
                            hide_onmobile: false,
                            hide_onleave: true,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            }
                        }
                    },
                    responsiveLevels:[1240,1024,778,480],
                    gridwidth:[1140,1024,778,480],
                    gridheight:[700,600,800,800],
                    disableProgressBar:"on",
                    parallax: {
                        type:"mouse",
                        origo:"slidercenter",
                        speed:2000,
                        levels:[2,3,4,5,6,7,12,16,10,50],
                    }


                });
            });
        </script>
         
        <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>