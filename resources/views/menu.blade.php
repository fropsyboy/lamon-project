@extends('layouts.app')

@section('logo')
    <h2><a href="{{ url('/home') }}">LA MON YOGHURTS</a></h2>
@endsection

@section('banner')
    <section class="menu-banner text-center">
        <div class="inner-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-content">
                        <h1>Our Recipes</h1>
                    </div> 
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <!--menu page section start-->
    <section class="our-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-heading">
                        <span>The</span>
                        <h2>Recipes</h2>
                        <img src="{{ asset('assets/images/leaf-icon.png') }}" class="img-responsive">
                    </div>
                    <p class="text-center">We try out, explore and bring to life some of the most amazing recipes straight from La Mon's kitchen.</p>
                    <div id="main" class="main">
                        <div class="primary-content">
                            <div class="big-demo go-wide" data-js-module="filtering-demo">
                                <!------------------------------------filters--------------------------------------------------------------->
                                <div class="filter-button-group button-group js-radio-button-group container">
                                    <div class="filter-inner">
                                        <button class="btn btn-sm btn-default button is-checked" data-filter=".breakfast">Breakfast</button>
                                        <button class="btn btn-sm btn-default button" data-filter=".lunch">Lunch</button>
                                        <button class="btn btn-sm btn-default button" data-filter=".dinner">Dinner</button>
                                        <button class="btn btn-sm btn-default button" data-filter=".drinks">Drinks</button>
                                        <button class="btn btn-sm btn-default button" data-filter=".soups">Soups</button>
                                        <button class="btn btn-sm btn-default button" data-filter=".desserts">Desserts</button>
                                    </div>
                                </div>
                                <!------------------------------------filters--------------------------------------------------------------->
                                <ul class="clearfix grid">
                                    <li class="breakfast element-item" data-category="breakfast">
                                        <a href="javascript:void(0)" rel="prettyPhoto[gallery1]">
                                            <div class="menu-img">
                                                <img src="{{ asset('assets/images/product1.jpg') }}">
                                            </div>
                                            <div class="menu-content">
                                                <h5>Sapphire Martini</h5>
                                                <p>Barr hill gin, domaine de canton, lemon juice, sprite</p>
                                            </div>
                                            <div class="AddCart">
                                                <span>$20.00</span>
                                                <button class="btn btn-sm btn-primary">Add</button>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="lunch breakfast element-item" data-category="lunch breakfast">
                                        <a href="javascript:void(0)" rel="prettyPhoto[gallery1]">
                                            <div class="menu-img">
                                                <img src="{{ asset('assets/images/product1.jpg') }}">
                                            </div>
                                            <div class="menu-content">
                                                <h5>Sapphire Martini</h5>
                                                <p>Barr hill gin, domaine de canton, lemon juice, sprite</p>
                                            </div>
                                            <div class="AddCart">
                                                <span>₦20.00</span>
                                                <button class="btn btn-sm btn-primary">Add</button>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dinner breakfast element-item" data-category="dinner breakfast">
                                        <a href="javascript:void(0)" rel="prettyPhoto[gallery1]">
                                             <div class="menu-img">
                                                <img src="{{ asset('assets/images/product2.jpg') }}">
                                            </div>
                                            <div class="menu-content">
                                                <h5>Yogurt</h5>
                                                <p>Barr hill gin, domaine de canton, lemon juice, sprite</p>
                                            </div>
                                            <div class="AddCart">
                                                <span>₦20.00</span>
                                                <button class="btn btn-sm btn-primary">Add</button>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="drinks breakfast element-item" data-category="drinks breakfast">
                                        <a href="javascript:void(0)" rel="prettyPhoto[gallery1]">
                                            <div class="menu-img">
                                                <img src="{{ asset('assets/images/product2.jpg') }}">
                                            </div>
                                            <div class="menu-content">
                                                <h5>Yogurt</h5>
                                                <p>Barr hill gin, domaine de canton, lemon juice, sprite</p>
                                            </div>
                                            <div class="AddCart">
                                                <span>₦20.00</span>
                                                <button class="btn btn-sm btn-primary">Add</button>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="soups breakfast element-item" data-category="soups breakfast">
                                        <a href="javascript:void(0)" rel="prettyPhoto[gallery1]">
                                             <div class="menu-img">
                                                <img src="{{ asset('assets/images/product3.jpg') }}">
                                            </div>
                                            <div class="menu-content">
                                                <h5>Porridge Oats</h5>
                                                <p>Barr hill gin, domaine de canton, lemon juice, sprite</p>
                                            </div>
                                            <div class="AddCart">
                                                <span>₦20.00</span>
                                                <button class="btn btn-sm btn-primary">Add</button>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="desserts  breakfast element-item" data-category="desserts breakfast">
                                        <a href="javascript:void(0)" rel="prettyPhoto[gallery1]">
                                            <div class="menu-img">
                                                <img src="{{ asset('assets/images/product3.jpg') }}">
                                            </div>
                                            <div class="menu-content">
                                                <h5>Porridge Oats</h5>
                                                <p>Barr hill gin, domaine de canton, lemon juice, sprite</p>
                                            </div>
                                            <div class="AddCart">
                                                <span>₦20.00</span>
                                                <button class="btn btn-sm btn-primary">Add</button>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="desserts breakfast element-item" data-category="desserts breakfast">
                                        <a href="javascript:void(0)" rel="prettyPhoto[gallery1]">
                                            <div class="menu-img">
                                                <img src="{{ asset('assets/images/product4.jpg') }}">
                                            </div>
                                            <div class="menu-content">
                                                <h5>Porridge Oats</h5>
                                                <p>Barr hill gin, domaine de canton, lemon juice, sprite</p>
                                            </div>
                                            <div class="AddCart">
                                                <span>₦20.00</span>
                                                <button class="btn btn-sm btn-primary">Add</button>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="desserts breakfast element-item" data-category="desserts breakfast">
                                        <a href="javascript:void(0)" rel="prettyPhoto[gallery1]">
                                            <div class="menu-img">
                                                <img src="{{ asset('assets/images/product4.jpg') }}">
                                            </div>
                                            <div class="menu-content">
                                                <h5>Porridge Oats</h5>
                                                <p>Barr hill gin, domaine de canton, lemon juice, sprite</p>
                                            </div>
                                            <div class="AddCart">
                                                <span>₦20.00</span>
                                                <button class="btn btn-sm btn-primary">Add</button>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--menu page section end-->
@endsection