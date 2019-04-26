<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authentication</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- custom css -->
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

    <!--fontawesome css-->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

    <!---favicon logo -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!--quicksand font-->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet"> 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
 
<!--header section start-->
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="navigation">
                    <!-- Fixed navbar -->
                    <nav class="navbar navbar-default navbar-fixed-top">
                      <div class="container">
                        <div class="header-top">
                            <div class="col-sm-4">
                                <div class="call-us">
                                    <img src="{{ asset('assets/images/phone.png') }}" class="img-responsive">
                                    <span>+234-706-406-5182</span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="logo">
                                   @yield('logo')
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="social-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="header-bottom">
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                              <ul class="nav navbar-nav">
                                <li><a href="{{ url('/home') }}">Home</a></li>
                                @if(Request::is('home') || Request::is('/'))
                                    <li><a href="#products" class="menu">Products</a></li>
                                @endif
                                @if(Request::is('blog'))
                                    <li><a href="#menu" class="menu">Menu</a></li>
                                @endif
                                <li><a href="{{ url('/about') }}">About</a></li>
                                @if(Request::is('blog'))
                                    <li><a href="{{ url('/menu') }}">Shop</a></li>
                                @endif
                                @if(Request::is('menu'))
                                    <li><a href="{{ url('/menu') }}">Recipes</a></li>
                                @endif
                                <li><a href="{{ url('/contact') }}">Find/Contact Us</a></li>
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                @if(Request::is('cart'))
                                    <li><a href="{{ url('/cart') }}"><i class="fa fa-shopping-cart"></i></a></li>
                                @endif
                              </ul>
                            </div><!--/.nav-collapse -->
                        </div>
                      </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
 <!--header section end-->

<!--header banner section start-->
    @yield('banner')
<!--header banner section end-->
    
<!--main content section start-->
    @yield('content')
<!--main content section end-->

<!--footer section start-->
<footer class="footer-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contact-info">
                    <h5>Contact Us</h5>
                    <p>If you have any questions or you just want to talk to someone, you can call, visit or mail us</p>
                    <div class="contact-inner">
                        <p><strong>Address</strong> : <span>Lagos</span></p>
                        <p><strong>Phone</strong> : <span>+234-706-406-5182</span></p>
                        <p><strong>Email</strong> : <span>info@lamon.com</span></p>                       
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="opening-hours">
                    <h5>Opening Hours</h5>
                    <ul>
                        <li><h6>Monday</h6><span>9:00-22:00</span></li>
                        <li><h6>Tuesday</h6><span>9:00-22:00</span></li>
                        <li><h6>Wednesday</h6><span>9:00-22:00</span></li>
                        <li><h6>Thursday</h6><span>9:00-22:00</span></li>
                        <li><h6>Friday</h6><span>9:00-22:00</span></li>
                        <li><h6>Saturday</h6><span>9:00-22:00</span></li>
                        <li><h6>Sunday</h6><span>9:00-22:00</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="subscribe">
                    <h5>Write Us</h5>
                    <form method="POST" action="Send.php">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="Email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="Message" placeholder="Message" required></textarea>
                    </div>
                    <div class="text-center">
                        <input type="submit" name="submit" class="btn btn-sm btn-primary" value="Send">
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-md-12">
                <div class="copyright text-center">
                    <p>Copyright Hawayu 2018. All Rights Reserved. Designed by <span class="yellow">Gjospace</span></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer section end-->

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('assets/jscript/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/jscript/smoothScroll.js') }}"></script>
<script src="{{ asset('assets/jscript/isotope.js') }}"></script>
<script>
    $(window).scroll(function(){
        if ($(window).scrollTop() >= 10) {
            $('.navbar.navbar-default.navbar-fixed-top').addClass('fill-bg');
        }
        else {
            $('.navbar.navbar-default.navbar-fixed-top').removeClass('fill-bg');
        }
});
</script>
 
<script>
    var prev = 0;
    var $window = $(window);
    var nav = $('#navbar');

    $window.on('scroll', function(){
      var scrollTop = $window.scrollTop();
      nav.toggleClass('hidden', scrollTop > prev);
      $('#navbar').removeClass('in');
      prev = scrollTop;
    });
</script>
    
<script>
    $('.nav a.menu').smoothScroll();
</script>  
</body>
</html>