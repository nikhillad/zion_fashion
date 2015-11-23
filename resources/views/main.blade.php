<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>

    <!-- Meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="zion, zion fashion, fashion, clothes">

    <!-- 'theme-color' will set background color in Chrome browser on Android 5.0+ -->
    <meta name="theme-color" content="#263238">

    <!-- Favicon - this tools will help you generate favicons for all platform - http://realfavicongenerator.net/ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('img/favicons/favicon.png')}}">

    <!-- MAIN STYLES -->
    <!-- If you want change theme, you need to remove old one and new one, how for Bootstrap, so for custom theme -->
    <link href="{{URL::asset('css/bootstrap/themes/cyan-b.css')}}" rel="stylesheet" id="bootstrapTheme">
    <!--<link href="assets/css/main-theme/themes/red-b.css" rel="stylesheet" id="mainTheme">-->
    <link href="{{URL::asset('css/main-theme/themes/cyan-m.css')}}" rel="stylesheet" id="mainTheme">
    <!--<link href="assets/css/main-theme/themes/red-m.css" rel="stylesheet" id="mainTheme">-->

    <!-- FONTS -->
    <link href="{{asset('css/google/font.css')}}" rel="stylesheet">

    <!-- PLUGINS -->
    <link rel="stylesheet" href="{{URL::asset('css/plugins/animations.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/plugins/animate.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/plugins/slider-revolution.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/plugins/cubeportfolio.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/plugins/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/plugins/font-awesome.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/plugins/devicons.css')}}">
</head>

<body>

    <!-- PRELOADER -->
    <div class="preloader-wrap clearfix" id="preloader">
        <div class="hv-center">
            <div class="spinner"></div>
        </div>
		<span style="margin-top:61px" class="hv-center"><h3>Zion Fashion</h3></span>
    </div>
    <!-- /PRELOADER -->

    <!--===============================
                MAIN WRAP  
     ===============================-->
    <div id="page-wrap">

        <!-- NAVIGATION -->
        <div class="navbar navbar-trn navbar-fixed-top navbar-height" role="navigation" id="navbarSettings">
            <div class="container">
                <div class="navbar-header">
                    <!-- Mobile Navigation -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--/END Mobile Navigation -->
                    <!-- Logo/Name -->
                    <a class="scroll navbar-brand scroll" href="#sTop">Zion Fashion</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right" id="nav">
                        <li class="dropdown active">
                            <a href="#sTop">Home</a>
                        </li>
						<li class="dropdown">
                            <a href="#s3">Products</a>
                        </li>
                        <li class="dropdown">
                            <a href="#s1">Service</a>
                        </li>
                        <li class="dropdown">
                            <a href="#s2">About Us</a>
                        </li>
                        <li class="dropdown">
                            <a href="#s5">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="navbarSpaceBottom"></div>
		
		@yield('content')
		
		
		 <!-- FOOTER -->
        <div class="footer">
            <div class="container">
                <div class="space-sm"></div>
                <ul class="dark-icons icons-list center-block">
                    <li>
                        <a href="#" title="Follow us">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Follow us">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Follow us">
                            <i class="fa fa-skype"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Follow us">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Follow us">
                            <i class="fa fa-youtube-play"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Follow us">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                </ul>
                <div class="space-md"></div>
                <div>
                    &copy; 2015 Influence. All rights reserved.
                </div>
            </div>
        </div>
        <!-- /FOOTER -->

        <!--=== BACK TO TOP ===-->
        <a href="#" class="back-to-top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--===/End BACK TO TOP ===-->
    </div>

    <!--===============================
                /MAIN WRAP 
     ===============================-->

    <!-- SCRIPTS -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <script src="{{URL::asset('js/plugins/modernizr-latest.js')}}"></script>
    <script src="{{URL::asset('js/plugins/picturefill.js')}}"></script>
    <script src="{{URL::asset('js/plugins/smoothScroll.js')}}"></script>
    <script src="{{URL::asset('js/plugins/wow.js')}}"></script>
    <script src="{{URL::asset('js/plugins/classie.js')}}"></script>
    <script src="{{URL::asset('js/plugins/jquery.nav.js')}}"></script>
    <script src="{{URL::asset('js/plugins/jquery.stellar.js')}}"></script>
    <script src="{{URL::asset('js/plugins/jquery.themepunch.tools.js')}}"></script>
    <script src="{{URL::asset('js/plugins/jquery.themepunch.revolution.js')}}"></script>
    <script src="{{URL::asset('js/plugins/owl.carousel.js')}}"></script>
    <script src="{{URL::asset('js/plugins/jquery.knob.js')}}"></script>
    <script src="{{URL::asset('js/plugins/form.js')}}"></script>
    <script src="{{URL::asset('js/plugins/dialogFx.js')}}"></script>
    <script src="{{URL::asset('js/plugins/jquery.cubeportfolio.js')}}"></script>
    <script src="{{URL::asset('js/plugins/awesome-work.js')}}"></script>
    <script src="{{URL::asset('js/plugins/jquery.modalEffects.js')}}"></script>
    <script src="{{URL::asset('js/plugins/cssParser.js')}}"></script>
    <script src="{{URL::asset('js/plugins/snazzy-maps.js')}}"></script>

    <script src="{{URL::asset('js/plugins.js')}}"></script>
    <script src="{{URL::asset('js/custom.js')}}"></script>
    <script src="{{URL::asset('js/style-switcher.js')}}"></script>
    <script>
    $(function() {
        //Plugins Init
        Plugins.init();
        Plugins.animations();
        Plugins.wow();
        Plugins.parallaxStellar();
        Plugins.revolutionSlider();
        Plugins.dialogEffects();
        Plugins.onePageNav();
        Plugins.owlCarousel();
        Plugins.knobs(".lbKnob", "#26C6DA");
        Plugins.modalEffects();

        //Custom JS Init
        Custom.init();
        Custom.captchaFix();
        Custom.loadMoreNews();
        Custom.mobileMenuAnimation();
    });
    </script>

    <!--[if lt IE 9]>
          <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <!-- /SCRIPTS -->
</body>

</html>