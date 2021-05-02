<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    

    <title>Daily Shop | Home</title>
    
    <!-- Font awesome -->

    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css" >

    <!-- Bootstrap -->
 

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" >

    <!-- SmartMenus jQuery Bootstrap Addon CSS -->


    <link href="{{ asset('css/jquery.smartmenus.bootstrap.css') }}" rel="stylesheet" type="text/css" >

    <!-- Product view slider -->


    <link href="{{ asset('css/jquery.simpleLens.css') }}" rel="stylesheet" type="text/css" >

    <!-- slick slider -->

    <link href="{{ asset('css/slick.css') }}" rel="stylesheet" type="text/css" >

    <!-- price picker slider -->


    <link href="{{ asset('css/nouislider.css') }}" rel="stylesheet" type="text/css" >

    <!-- Theme color -->
    <link href="{{ asset('css/theme-color/default-theme.css') }}" rel="stylesheet" type="text/css" >

    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="{{ asset('css/sequence-theme.modern-slide-in.css') }}" rel="stylesheet" type="text/css" >

    <!-- Main style sheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

  </head>
  <body> 
   <!-- wpf loader Two -->
    <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div> 
    <!-- / wpf loader Two -->       
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->
    @include('layouts.header_top')
    <!-- / header top  -->

    <!-- start header bottom  -->
    @include('layouts.header_botton')
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->


  <!-- menu -->
  @include('layouts.menu_top')
  <!-- / menu -->

  <!-- Start slider -->
  @include('home.slider_banner')
  <!-- / slider -->
  <!-- Start Promo section -->
  @include('home.promo_banner')
  <!-- / Promo section -->

  <!-- Products section -->
  @include('home.product_session')
  <!-- / Products section -->


  <!-- banner section -->

  @include('home.banner')

  <!-- popular section -->
  @include('home.popular_category')
  <!-- / popular section -->
  <!-- Support section -->
  @include('home.support')
  <!-- / Support section -->


  <!-- Testimonial -->
  @include('layouts.testimonial')
  <!-- / Testimonial -->

  <!-- Client Brand -->
  @include('layouts.client_brand')
  <!-- / Client Brand -->

  <!-- Subscribe section -->
  @include('layouts.subscribe')
  <!-- / Subscribe section -->

  <!-- footer -->  
   @include('layouts.footer')
  <!-- / footer -->

  <!-- Login Modal -->  
  @include('layouts.login_popup')

  <!-- / Login Modal -->  
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ URL::asset('js/bootstrap.js') }}"></script>
  <!-- SmartMenus jQuery plugin -->
  <script src="{{ URL::asset('js/jquery.smartmenus.js') }}"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script src="{{ URL::asset('js/jquery.smartmenus.bootstrap.js') }}"></script>
  <!-- To Slider JS -->
  <script src="{{ URL::asset('js/sequence.js') }}"></script>

  <script src="{{ URL::asset('js/sequence-theme.modern-slide-in.js') }}"></script>
  <!-- Product view slider -->
  <script src="{{ URL::asset('js/jquery.simpleGallery.js') }}"></script>

  <script src="{{ URL::asset('js/jquery.simpleLens.js') }}"></script>
  <!-- slick slider -->
  <script src="{{ URL::asset('js/slick.js') }}"></script>
  <!-- Price picker slider -->
  <script src="{{ URL::asset('js/nouislider.js') }}"></script>
  <!-- Custom js -->
  <script src="{{ URL::asset('js/custom.js') }}"></script>
  </body>
</html>
