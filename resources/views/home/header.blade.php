    <div class="banner-section">
    <section class="slider">
    <div class="flexslider">
    <ul class="slides">
    <li>
    <div class="slider-info">
    <img src="{{asset('assets')}}/images/ba1.jpg" class="img-responsive" alt="">
    </div>
    <div class="container">
    <div class="banner-text">
    <h3>Outdoor & Indoor Luxury</h3>
    </div>
    </div>
    </li>
    <li>
    <div class="slider-info">
    <img src="{{asset('assets')}}/images/ba2.jpg" class="img-responsive" alt="">
    </div>
    <div class="container">
    <div class="banner-text">
    <h3>Luxury & Oriental Harmony</h3>
    </div>
    </div>
    </li>
    <li>
    <div class="slider-info">
    <img src="{{asset('assets')}}/images/ba3.jpg" class="img-responsive" alt="">
    </div>
    <div class="container">
    <div class="banner-text">
    <h3>A Brand New Hotel</h3>
    </div>
    </div>
    </li>
    </ul>
    </div>
    </section>
    <!-- FlexSlider -->
    <script defer src="{{asset('assets')}}/js/jquery.flexslider.js"></script>
    <script type="text/javascript">
    $(function(){
    SyntaxHighlighter.all();
    });
    $(window).load(function(){
    $('.flexslider').flexslider({
    animation: "slide",
    start: function(slider){
    $('body').removeClass('loading');
    }
    });
    });
    </script>
    <!-- FlexSlider -->
    <!-- slider -->
    </div>


    <div class="header">
    <div class="container">
    <div class="header-menu">
    <nav class="navbar navbar-default">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
    <div class="navbar-brand logo">
    <h1><a href="{{route('home')}}"><span>Fancy  </span> Hotel</a></h1>


    </div>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
    <li class="active"><a href="{{route('home')}}">Home </a></li>
    <li><a href="{{route('aboutus')}}">About Us</a></li>
    <li><a href="{{route('references')}}">References</a></li>
 
    <li><a href="{{route('gallery')}}">Gallery</a></li>
    <li><a href="{{route('faq')}}">FAQ</a></li>
    <li><a href="{{route('contact')}}">Contact</a></li>
    
   @guest
   <li><a href="/loginuser" class="btn btn-info">LOGIN</a></li>
        @endguest
        @auth
        <li><a href="/logoutuser" class="btn btn-info">LOGOUT</a></li>
    @endauth
      <li><a href="/registeruser" class="btn btn-info">JOIN</a></li>
      
         
          <a href="{{route('shopcart.index')}}" class="btn btn-info"><b>My Bookings({{\App\Http\Controllers\ShopCartController::countshopcart()}})</b><i class="fa fa-envelope-o fa-2x"></i></a>
    
 

                                        </ul>
                                        </div><!-- /.navbar-collapse -->
                                        </div><!-- /.container-fluid -->
                                        </nav>
                                        <div class="clearfix"></div>
                                        
                                        </div>	
                                        </div> 
                                        </div>


                                        
                                        <!---header--->		


