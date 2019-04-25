@extends('layouts.app')

@section('logo')
    <a href="{{ url('/home') }}"><img src="assets/images/logo.png" class="img-responsive"></a>
@endsection

@section('banner')
    <section class="blog-banner text-center">
        <div class="inner-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-content">
                        <h1>Blog</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <!--blog section start-->
    <section class="blog-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-wrapper">
                        <div class="blog-inner">
                            <a href="{{ url('/single-blog') }}"><h3>How To Make The Mexico Salad</h3></a>
                            <div class="date">
                                <span>25 March 2017</span>
                            </div>
                            <img src="{{ asset('assets/images/blog8.jpg') }}" class="img-responsive" alt="">
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum...
                            </p>
                            <div class="read-more">
                                <a href="{{ url('/single-blog') }}">Continue Reading <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="blog-inner">
                            <a href="{{ url('/single-blog') }}"><h3>How To Make The Mexico Salad</h3></a>
                            <div class="date">
                                <span>25 March 2017</span>
                            </div>
                            <img src="{{ asset('assets/images/blog8.jpg') }}" class="img-responsive" alt="">
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum...
                            </p>
                            <div class="read-more">
                                <a href="{{ url('/single-blog') }}">Continue Reading <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-sidebar">
                        <div class="search-btn">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </div>
                        <div class="blog-posts">
                            <h5>Latest Posts</h5>
                            <div class="post-content">
                                <div class="post-img">
                                    <a href="#"><img src="{{ asset('assets/images/product2.jpg') }}" class="img-responsive" alt=""></a>
                                </div>
                                <div class="post-des">
                                    <a href="#"><h5>Nuts & Dry Fruits</h5></a>
                                    <span>26 March 2017</span>
                                </div>
                            </div>
                            <div class="post-content">
                                <div class="post-img">
                                    <a href="#"><img src="{{ asset('assets/images/product3.jpg') }}" class="img-responsive" alt=""></a>
                                </div>
                                <div class="post-des">
                                    <a href="#"><h5>Porridge Oats</h5></a>
                                    <span>26 March 2017</span>
                                </div>
                            </div>
                            <div class="post-content">
                                <div class="post-img">
                                    <a href="#"><img src="{{ asset('assets/images/product2.jpg') }}" class="img-responsive" alt=""></a>
                                </div>
                                <div class="post-des">
                                    <a href="#"><h5>Nuts & Dry Fruits</h5></a>
                                    <span>26 March 2017</span>
                                </div>
                            </div>
                        </div>
                        <div class="blog-category">
                            <h5>Categories</h5>
                            <ul>
                                <li><a href="#">Indian Food</a></li>
                                <li><a href="#">Fast Food</a></li>
                                <li><a href="#">Chinese Food</a></li>
                                <li><a href="#">Salad</a></li>
                                <li><a href="#">Drinks</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog section end-->
@endsection