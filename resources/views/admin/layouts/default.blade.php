

<!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css" >
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- Custom styles for this template-->
<link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet" type="text/css" >

  <title>SB Admin 2 - @yield('title')</title>

<!------ Include the above in your HEAD tag ---------->
        <!--===================   Header   =======================-->

      <header class="header">
         @include('admin.layouts.top_navbar')
      </header>

      <div class="main">
         <div class="row" id="allocate_dashboard"> 
            <div class="col-2">
               <!------ left menu ------> 

               @include('admin.layouts.left_navbar')

            </div>
            <div class="col-10">
                @yield('content')
            </div>
          </div> 
      </div>
 <script type="text/javascript" src="{{ URL::asset('js/dashboard_home.js') }}"></script>
  