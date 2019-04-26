@extends('layouts.app')

@section('logo')
    <img src="assets/images/logo.gif" class="img-responsive">
@endsection

@section('banner')
    <section class="blog-banner text-center">
        <div class="inner-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-content">
                        <h1>Our Story</h1>
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
                <div class="col-md-12">
                    <div class="blog-wrapper">
                        <div class="blog-inner">
                            <a href="#"><h3>How it all started</h3></a>
                            <div class="date">
                                <span>September 2002</span>
                            </div>
                            <img src="{{ asset('assets/images/blog6a.jpg') }}" class="img-responsive" alt="">
                            <div class="single-blogsec">
                                <p>
                                    <span class="dropcap">I</span>
                                    n the aftermath of a severed relation in September 2002, and to keep a vision alive, Mr Nduka founded the La Mon brands of Yoghurt. 
                                    The Founder commenced the research of yoghurt making which he failed to learn from his then fiancé. After several years of unproductive attempts, on June 7, 2007, the formula was delivered to him in an unusual encounter. 
                                    Since then he made several attempts to grow his dream into an industry. Whilst still researching he constituted various board of directors. One day, one of the members asked him, so where is this yoghurt we are talking about?
                                </p>
                                    <blockquote>
                                        <p>
                                            I really don’t know, but one day I will discover how to do it, he replied.
                                        </p>
                                    </blockquote>             
                                <p>
                                    The dream took him to Suberu Oje, in Alagbado area of Lagos, but due to funds and lack of proper legal advice he pulled away from the project after expending a substantial amounts on the project. 
                                    He retreated to teaching yoghurt making in Churches, gatherings and in empowerment programmes. He went further to develop more than twenty skills which he teaches.
                                    Upon invitation to the home of his former Group Managing Director and several interactions with him, he decided to change his life for good. 
                                    He went to town and took about sixty thousands photos of Lagos and other villages. He eventually turned some of these photos into water colour paintings. His paintings adorn homes both in Nigeria and outside the country.         
                                </p>
                                <p>
                                        In 2017, he planned to relocate outside the shores of Nigeria. When he was given the bill for the travel, he said to himself, 
                                </p>
                                <blockquote>
                                    <p>
                                        if I have this kind of money, I will build my yoghurt industry
                                    </p>
                                </blockquote>
                                <p>
                                    On convincing his wife, of whom they share the same vision, on the new way forward for the family, the journey received fresh boost and started all over again.
                                    He got an abandoned water factory and turned it into a water and yoghurt factory. As a believer in due process and upholding the high standards of quality and hygiene; he approached the regulatory agencies and 
                                    got the approvals for his brands of yoghurt and table water.
                                    A Nigerian Breweries scholar and first class graduate of Graphic design, University of Benin, an alumnus of School of Media and 
                                    Communication, Pan African University, he has warmed himself into the hearts of many with his special kind of yoghurts.                                     
                                </p>
                                <p>This is the success story of LaMon yoghurt.
    
                                </p>
                            </div>
                        </div>
                    </div>
                </div>    
            </div> 
        </div>
    </section>
@endsection