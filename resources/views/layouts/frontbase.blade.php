<!DOCTYPE html>
<html>
<head>
<title>@yield("title")</title>

 <meta name="description" content="@yield("description")">
  <meta name="keywords" content="@yield("keywords")">
  <meta name="author" content="Ayouppe Oumar">
  <link rel="icon" type="image/x-icon" href="@yield("icon")">
  


<link href="{{asset('assets')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--theme-style-->
<link href="{{asset('assets')}}/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<link href="{{asset('assets')}}/css/font-awesome.css" rel="stylesheet">
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Best Hotel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
<script src="{{asset('assets')}}/js/jquery.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<!---->
<link rel="stylesheet" href="{{asset('assets')}}/css/flexslider.css" type="text/css" media="screen" />
<link href='{{asset('assets')}}/fonts.googleapis.com/css?family=Nunito:400,700,300' rel='stylesheet' type='text/css'>
<link href='{{asset('assets')}}/fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!---strat-date-piker---->
<!-- requried-jsfiles-for owl -->
							<link href="{{asset('assets')}}/css/owl.carousel.css" rel="stylesheet">
							    <script src="{{asset('assets')}}/js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
							    </script>
							 <!-- //requried-jsfiles-for owl -->
                                                         
                                                         
                                                         
 @yield("head")
</head>
 
</head>
    
  
    <body>
       
      @include("home.header")
        
      
         @section('slider')
       
        @show
        
                 
                  
     
         

 
      
            @yield('content')
            
            @include("home.footer")
        @yield('foot')
    </body>
</html>