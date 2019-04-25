@extends('layouts.app')

@section('logo')
    <img src="assets/images/logo.gif" class="img-responsive">
@endsection

@section('banner')
    <section class="header-banner text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-content">
                        <h1>100% milk!</h1>
                        <p>Sharing goodness!</p>
                        <a href="#services"><button class="btn btn-sm btn-default">Order Now</button></a>
                    </div> 
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <!--about section start-->
    <section class="about-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="history-wrapper">
                        <div class="history text-center">
                            <div class="main-heading">
                                <span>Discover</span>
                                <h2>Our Story</h2>
                                <img src="{{ asset('assets/images/leaf-icon.png') }}" class="img-responsive">
                            </div>
                            <div class="history-content">
                                <p>LA MON YOGHURT is a product of Howayu group. LA MON YOGHURT was born many many years ago out of the passion to serve. </p>
                                <a href="{{ url('/single-blog') }}">Read more  <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="history-border">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6">
                    <div class="about-img">
                        <img src="{{ asset('assets/images/about1a.gif') }}" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-4 col-xs-6">
                    <div class="about-img">
                        <ul>
                            <li><img src="{{ asset('assets/images/about2.gif') }}" class="img-responsive"></li>
                            <li><img src="{{ asset('assets/images/about3.gif') }}" class="img-responsive"></li>
                        </ul>  
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about section end-->
        
    <!--services section start-->
    <section class="services-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-heading">
                        <span id="products">Specialities</span>
                        <h2 id="services">Our Services</h2>
                        <img src="{{ asset('assets/images/leaf-icon.png') }}" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services-inner border-right text-center">
                        <div class="services-img">
                            <img src="{{ asset('assets/images/lunch1a.gif') }}" class="img-responsive">
                        </div>
                        <div class="services-content">
                            <h3>Customized Table water</h3>
                            <p>Pure,fresh and clean water processed under the best conditions and customizable label to meet your personal needs whatever the occassion
                            </p>
                            <a href="#"><button class="btn btn-sm btn-default">Buy</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services-inner border-right text-center">
                        <div class="services-img">
                            <img src="{{ asset('assets/images/greek.gif') }}" class="img-responsive">
                        </div>
                        <div class="services-content">
                            <h3>La Mon Greek Yoghurt(unsweetened)</h3>
                            <p>Short writeup on what the yoghurt is made up of and its content and what makes it special than other variety of yoghurts plus anything else...
                            </p>
                            <a href="#"><button class="btn btn-sm btn-default">Buy</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services-inner border-right text-center">
                        <div class="services-img">
                            <img src="{{ asset('assets/images/dinner.png') }}" class="img-responsive">
                        </div>
                        <div class="services-content">
                            <h3>La Mon Yoghurt(Banana flavored) Satchet</h3>
                            <p>Short writeup on what the yoghurt is made up of and its content and what makes it special than other variety of yoghurts plus anything else...
                            </p>
                            <a href="#"><button class="btn btn-sm btn-default">Buy</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                        <div class="services-inner border-right text-center">
                            <div class="services-img">
                                <img src="{{ asset('assets/images/lunch.png') }}" class="img-responsive">
                            </div>
                            <div class="services-content">
                                <h3>La Mon Yoghurt Bar</h3>
                                <p>Short writeup on what the yoghurt is made up of and its content and what makes it special than other variety of yoghurts plus anything else...
                                </p>
                                <a href="#"><button class="btn btn-sm btn-default">Buy</button></a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!--services section end-->
        
    <!--our menu section start-->
    <!--
    <section id="menu" class="menu-sec">
        <div class="menu-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-heading">
                        <span>Discover</span>
                        <h2>Our Recipes</h2>
                        <img src="{{ asset('assets/images/white-leaf.png') }}" class="img-responsive">
                    </div>
                </div>
                <div class="col-sm-6">
                    <ul class="menu-wrapper">
                        <li class="menu-inner">
                            <div class="menu-des">
                            <span class="menu-title">
                                Chicken Soup
                                </span>
                                <span class="menu-border"></span>
                                <span class="menu-price">₦50.00</span>
                            </div>
                            <p>Finest Chicken Meat, Pepper, Potatoes, Concase Peppers</p>
                        </li>
                        <li class="menu-inner">
                            <div class="menu-des">
                            <span class="menu-title">
                                Chicken Soup
                                </span>
                                <span class="menu-border"></span>
                                <span class="menu-price">₦50.00</span>
                            </div>
                            <p>Finest Chicken Meat, Pepper, Potatoes, Concase Peppers</p>
                        </li>
                        <li class="menu-inner">
                            <div class="menu-des">
                            <span class="menu-title">
                                Chicken Soup
                                </span>
                                <span class="menu-border"></span>
                                <span class="menu-price">₦50.00</span>
                            </div>
                            <p>Finest Chicken Meat, Pepper, Potatoes, Concase Peppers</p>
                        </li>
                        <li class="menu-inner">
                            <div class="menu-des">
                            <span class="menu-title">
                                Chicken Soup
                                </span>
                                <span class="menu-border"></span>
                                <span class="menu-price">₦50.00</span>
                            </div>
                            <p>Finest Chicken Meat, Pepper, Potatoes, Concase Peppers</p>
                        </li>
                        <li class="menu-inner">
                            <div class="menu-des">
                            <span class="menu-title">
                                Chicken Soup
                                </span>
                                <span class="menu-border"></span>
                                <span class="menu-price">₦50.00</span>
                            </div>
                            <p>Finest Chicken Meat, Pepper, Potatoes, Concase Peppers</p>
                        </li>
                    <li class="menu-inner">
                            <div class="menu-des">
                            <span class="menu-title">
                                Chicken Soup
                                </span>
                                <span class="menu-border"></span>
                                <span class="menu-price">₦50.00</span>
                            </div>
                            <p>Finest Chicken Meat, Pepper, Potatoes, Concase Peppers</p>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <ul class="menu-wrapper">
                        <li class="menu-inner">
                            <div class="menu-des">
                            <span class="menu-title">
                                Chicken Soup
                                </span>
                                <span class="menu-border"></span>
                                <span class="menu-price">₦50.00</span>
                            </div>
                            <p>Finest Chicken Meat, Pepper, Potatoes, Concase Peppers</p>
                        </li>
                        <li class="menu-inner">
                            <div class="menu-des">
                            <span class="menu-title">
                                Chicken Soup
                                </span>
                                <span class="menu-border"></span>
                                <span class="menu-price">₦50.00</span>
                            </div>
                            <p>Finest Chicken Meat, Pepper, Potatoes, Concase Peppers</p>
                        </li>
                        <li class="menu-inner">
                            <div class="menu-des">
                            <span class="menu-title">
                                Chicken Soup
                                </span>
                                <span class="menu-border"></span>
                                <span class="menu-price">₦50.00</span>
                            </div>
                            <p>Finest Chicken Meat, Pepper, Potatoes, Concase Peppers</p>
                        </li>
                        <li class="menu-inner">
                            <div class="menu-des">
                            <span class="menu-title">
                                Chicken Soup
                                </span>
                                <span class="menu-border"></span>
                                <span class="menu-price">₦50.00</span>
                            </div>
                            <p>Finest Chicken Meat, Pepper, Potatoes, Concase Peppers</p>
                        </li>
                        <li class="menu-inner">
                            <div class="menu-des">
                            <span class="menu-title">
                                Chicken Soup
                                </span>
                                <span class="menu-border"></span>
                                <span class="menu-price">₦50.00</span>
                            </div>
                            <p>Finest Chicken Meat, Pepper, Potatoes, Concase Peppers</p>
                        </li>
                    <li class="menu-inner">
                            <div class="menu-des">
                            <span class="menu-title">
                                Chicken Soup
                                </span>
                                <span class="menu-border"></span>
                                <span class="menu-price">₦50.00</span>
                            </div>
                            <p>Finest Chicken Meat, Pepper, Potatoes, Concase Peppers</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-12 text-center">
                    <a href="{{ url('/menu') }}"><button class="btn btn-sm btn-default">View All Recipes</button></a>
                </div>
            </div>
        </div>
    </section>
    -->
    <!--our menu section end-->
        
    <!--testimonial section start-->
    <section class="testimonial-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-heading">
                        <span style=color:#48a8f0;>Feedback</span>
                        <h2 style=color:#48a8f0;>Testimonial</h2>
                        <img src="{{ asset('assets/images/leaf-icon.png') }}" class="img-responsive">
                    </div>
                    <div class="carousel text-center">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                            <div class="carousel-img">
                                    <img src="{{ asset('assets/images/testimoniala.gif') }}" class="img-responsive" alt="">
                            </div>
                            <div class="carousel-caption">
                                <p> 
                                        Wow! This has to be the best yoghurt i have ever tasted. It is kind of different like so different in a very good way. What is in it?
                                </p>
                                <span>George-Joe</span>
                            </div>
                            </div>
                            <div class="item">
                            <div class="carousel-img">
                                    <img src="{{ asset('assets/images/testimoniala.gif') }}" class="img-responsive" alt="">
                            </div>
                            <div class="carousel-caption">
                                <p> 
                                This yoghurt just gave me a taste of what heaven feels like. It is awesome!!!
                                </p>
                                <span>Pelunmi Thomas</span>
                            </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="fa  fa-angle-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="fa fa-angle-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--testimonial section end-->
        
    <!--deal day section start-->
    <section class="deal-day">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="deal-content">
                        <h1>Free Home Delivery</h1>
                        <h2>Every Day</h2>
                    <a href="#services"><button class="btn btn-sm btn-primary">Order Online now</button></a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="deal-img">
                        <img src="{{ asset('assets/images/deal.gif') }}" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--deal day section end-->
@endsection
