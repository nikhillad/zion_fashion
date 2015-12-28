<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>

    <!-- Meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Corporate t-shirt in India, Promotional T-Shirt Supplier in India, T-Shirt Manufacturers in India, home textile manufacturers in India, 
hotel bed linen suppliers India, hospital linen manufacturers India, towel manufacturers India, Sweater manufacturer in India, Home Curtain suppliers, Shirt manufacturers India, Home Textiles Suppliers, leather belt manufacturer in India, leather products manufacturers in India, leather bag manufacturers in India">
    <meta name="description" content="zion,zionfashion,zion fashion,Manufacturer, Supplier and Exporters of T-Shirts, Polo, Shirts, Trouser, Sweater, Hoodies, Specialized in Kid's wear, 
Bed Linen, Hotel Bed Linen, Kitchen Linen, Living Linen, Table linen, 100% Genuine Leather Products, Leather Belt, Leather Wallets, Customized corporate apparels, ready-made textile for companies, colleges, schools and hospitals">

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
    <link rel="stylesheet" href="{{URL::asset('css/colorbox.css')}}">

    <style type="text/css">
        .section-xlg {
            padding: 50px 0px !important;    
        }

        .ul-right-indent {
            margin-right: 5px; 
        }

        #features .section {
            height: 1050px;
        }

        .text-grey {
            color: #757575;
        }

        .navbar-sm.navbar .hidden-xs-navbar-brand {
            padding-top: 5px !important;
        }

        .navbar-height.navbar .hidden-xs-navbar-brand {
            padding-top: 20px !important;
        }

        .navbar-sm {
            background-color: #212121 !important; 
        }

        .container > .navbar-header, .container-fluid > .navbar-header, .container > .navbar-collapse, .container-fluid > .navbar-collapse {
            min-height : 60px !important;
        }
    </style>
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
                    <a class="hidden-xs scroll navbar-brand scroll hidden-xs-navbar-brand" href="#sTop">
                        <img style="width:50px;float:left" src="{{URL::asset('img/zion_logo.png')}}"></img>
                        <img style="width:120px;float:left" src="{{URL::asset('img/zion_text_logo.png')}}"></img>
                    </a>

                    <a class="visible-xs navbar-brand" href="#sTop">
                        <img style="margin-top:-5px; width:35px; float:left" src="{{URL::asset('img/zion_logo.png')}}"></img>
                    </a>

                </div>
                <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right" id="nav">
                        <li class="dropdown active">
                            <a href="#sTop">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="#s2">About Us</a>
                        </li>
                        <li class="dropdown">
                            <a href="#s1">Service</a>
                        </li>
                        <li class="dropdown">
                            <a href="#s3">Products</a>
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
                        <a href="https://plus.google.com/110526260592016820791" target="_blank" title="Follow us">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/zionfashions" target="_blank" title="Follow us">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                   <!--  <li>
                        <a href="#" title="Follow us">
                            <i class="fa fa-skype"></i>
                        </a>
                    </li> -->
                    <li>
                        <a href="https://web.facebook.com/Zion-Fashion-and-Lifestyle-Pvt-Ltd-747894748649784/" target="_blank" title="Follow us">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                   <!--  <li>
                        <a href="#" title="Follow us">
                            <i class="fa fa-youtube-play"></i>
                        </a>
                    </li> -->
                   <!--  <li>
                        <a href="#" title="Follow us">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li> -->
                </ul>
                <div class="space-md"></div>
                <div>
                    &copy; 2015 Zion Fashion. All rights reserved.
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

    <script src="{{URL::asset('js/plugins.js')}}"></script>
    <script src="{{URL::asset('js/custom.js')}}"></script>
    <script src="{{URL::asset('js/style-switcher.js')}}"></script>
    <script src="{{URL::asset('js/jquery.colorbox.js')}}"></script>
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
        Custom.mobileMenuAnimation();
    });

    $(document).ready(function(){
        //Examples of how to assign the Colorbox event to elements
        $(".group1").colorbox({rel:'group1', transition:"none", width:"80%", height:"80%"});
    });
      
    </script>

    <!--[if lt IE 9]>
          <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <!-- /SCRIPTS -->
</body>

</html>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71626789-1', 'auto');
  ga('send', 'pageview');

</script>