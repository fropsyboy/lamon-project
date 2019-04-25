@extends('layouts.app')

@section('logo')
    <img src="assets/images/logo.gif" class="img-responsive">
@endsection

@section('banner')
    <section class="about-banner text-center">
        <div class="inner-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-content">
                        <h1>About Us</h1>
                    </div> 
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <!--about us page section start-->
<section class="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-heading">
                        <span>Get to Know</span>
                        <h2>Our values</h2>
                        <img src="{{ asset('assets/images/leaf-icon.png') }}" class="img-responsive">
                    </div>
                    <p class="text-center">Quality, Hygiene, Credibility and People.<br>We have a corporate social responsibility of <em>giving back</em> and <em>empowering</em> the public</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="about-content">
                        <div class="who-we-are">
                            <h2>Our Mission</h2>
                            <p><strong>To create products that promotes wellbeing and wellness.</strong><br>The Founder commenced the research of yoghurt making which he failed to learn from his then fiancé. After several years of unproductive attempts, on June 7, 2007, the formula was delivered to him in an unusual encounter. </p>
                        </div>
                        <div class="Why-choose-us">
                            <h2>Our vision</h2>
                            <p><strong>To help everyone enjoy life healthy.</strong><br>
                            In the aftermath of a severed relation in September 2002, and to keep a vision alive, the La Mon brands of Yoghurt was born.</p>
                        </div>
                    </div>
                    <div class="about-pic">
                        <img src="{{ asset('assets/images/about-usa.gif') }}" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about us page section end-->
        
    <!--opening year section start-->
    <section class="opening-year">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="year text-center">
                        <h1>Since 2002</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--opening year section end-->
        
    <!--our team section start-->
    <section class="our-team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-heading">
                        <span>Discover</span>
                        <h2>Our Team</h2>
                        <img src="{{ asset('assets/images/leaf-icon.png') }}" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-wrapper text-center">
                        <img src="{{ asset('assets/images/team.jpg') }}" class="img-responsive">
                        <h5>BETHEL OMEIFE</h5>
                        <span>MD/CEO</span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-wrapper text-center">
                        <img src="{{ asset('assets/images/team.jpg') }}" class="img-responsive">
                        <h5>DR. YEMISI ASAGBRA </h5>
                        <span>Production Adviser</span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-wrapper text-center">
                        <img src="{{ asset('assets/images/team.jpg') }}" class="img-responsive">
                        <h5>IBIJOKE</h5>
                        <span>Business innovation</span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-wrapper text-center">
                        <img src="{{ asset('assets/images/team.jpg') }}" class="img-responsive">
                        <h5>EZEKIEL BENSON OKPARA</h5>
                        <span>Corporate sales</span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-wrapper text-center">
                        <img src="{{ asset('assets/images/team.jpg') }}" class="img-responsive">
                        <h5>BARR. JUDE KACHIKWU</h5>
                        <span>Legal Counsel</span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-wrapper text-center">
                        <img src="{{ asset('assets/images/team.jpg') }}" class="img-responsive">
                        <h5>SIMON OMOSEHIN</h5>
                        <span>Observer</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--our team section end-->    
@endsection