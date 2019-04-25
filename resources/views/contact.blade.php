@extends('layouts.app')

@section('logo')
    <img src="assets/images/logo.gif" class="img-responsive">
@endsection

@section('banner')
    <section class="contact-banner text-center">
        <div class="inner-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-content">
                        <h1>Contact</h1>
                    </div> 
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <!--contact us page sec start-->
    <section class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-heading">
                        <span>Contact</span>
                        <h2>Get in Touch</h2>
                        <img src="{{ asset('assets/images/leaf-icon.png') }}" class="img-responsive">
                    </div>
                    <div class="contact-wrapper">
                        <p>If you have any questions or you just want to talk to someone, you can call, visit or mail us</p>
                        <ul>
                            <li><img src="{{ asset('assets/images/marker.png') }}"> <span>Lagos</span></li>
                            <li><img src="{{ asset('assets/images/footer-phn.png') }}">  <span>+234-706-406-5182</span></li>
                            <li><img src="{{ asset('assets/images/mail.png') }}"> <span>info@lamon.com</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-heading">
                        <span>Newsletter</span>
                        <h2>Subscribe</h2>
                        <img src="{{ asset('assets/images/leaf-icon.png') }}" class="img-responsive">
                    </div>
                    <div class="subscribe">
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
            </div>
        </div>
    </section>
    <!--contact us page sec end-->
@endsection