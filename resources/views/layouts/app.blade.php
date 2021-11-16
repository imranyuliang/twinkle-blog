
<!DOCTYPE HTML>
<html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Voguish a Blogging Category Flat Bootstarp Responsive Website Template | Home :: w3layouts</title>
    <link href="{{asset('theme')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('theme')}}/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Voguish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>
     <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{asset('theme')}}/js/jquery.min.js"></script>
    <script src="{{asset('theme')}}/js/responsiveslides.min.js"></script>
     <!-- Scripts -->
    <script>
        $(function () {
          $("#slider").responsiveSlides({
            auto: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            pager: true,
          });
        });
        
      </script>
    
</head>
<body>
<!-- header -->
@include('layouts.nav')
   
<!-- header -->
<div class="container">
    <div class="col-md-9 bann-right">
        
        <!-- nam-matis -->
        @yield('content')
        <!-- nam-matis -->  
    
       <!-- @include('layouts.side-bar') -->
    <div class="clearfix"> </div>
       <!--  @include('layouts.image-slide') -->
        @include('layouts.footer')
    </div>
</body>
</html>