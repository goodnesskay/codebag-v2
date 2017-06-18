@extends('layouts.master')

@section('content')



        <!-- Intro Area
===================================== -->
<header class="intro pb100" style="background:url(public/assets/img/bg/img-bg-29.pn) 95% 100% no-repeat #e8424a; background-attachment:fixed;">
    <div class="intro-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-offset-1">
                    <h1 class="brand-heading-big text-left font-pacifico text-capitalize mt100 animated" data-animation="fadeInUp" data-animation-delay="100" style="text-shadow: 10px 10px 0 #cc262e;">
                        <span class="color-light">Solving Problems Through Codes.</span>
                    </h1>
                    <h5 class="lead text-left color-light mt50">
                        <em>"We are committed to making the society a better place through technology. You can join us on this vision. "</em><br>
                        <small class="color-light mt20">- Codebag Nigeria.</small>
                    </h5>
                    <p class="intro-text-big text-left color-light mt30 animated" data-animation="fadeInUp" data-animation-delay="200">
                        <a href="#" class="button button-yellow button-md hover-bounce-to-left mt10">Purchase Now</a>
                        <a href="#" class="button-o button-green button-md hover-bounce-to-right mt10">Explore Works</a>
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('public/assets/img/bg/img-bg-29.png') }}" style="margin-top:15%" class="img-responsive" alt="">
                </div>
            </div>
        </div>

        <div class="intro-direction">
            <a href="#welcome">
                <div class="mouse-icon"><div class="wheel"></div></div>
            </a>
        </div>

    </div>
</header>


<div id="welcome" class="pt75 bg-dark3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="font-size-normal color-light">
                    <small class="color-pasific alpha10">Welcome to Codebag</small>
                    We Are Wired By Our Passion To
                    <small class="heading heading-solid center-block"></small>
                </h1>
            </div>
        </div>

        <div class="row mt50">

            <!-- item one start -->
            <div class="col-md-4 col-sm-6 col-xs-12 animated" data-animation="fadeInLeft" data-animation-delay="100">
                <div class="content-box content-box-center">
                    <img src="{{ asset('public/assets/img/flat-icon/briefcase.svg')}}" alt="svg icon" class="img-responsive icon-svg">
                    <h4 class="color-light">Solve Problems</h4>
                    <p class="color-light alpha6">We are committed to solving problems through codes.</p>

                </div>
            </div>
            <!-- item one end -->

            <!-- item two start -->
            <div class="col-md-4 col-sm-6 col-xs-12 animated" data-animation="fadeInLeft" data-animation-delay="100">
                <div class="content-box content-box-center">
                    <img src="{{ asset('public/assets/img/flat-icon/close_up_mode.svg') }}" alt="svg icon" class="img-responsive icon-svg">
                    <h4 class="color-light">Building</h4>
                    <p class="color-light alpha6">We love to build stuffs that makes people happy.</p>

                </div>
            </div>
            <!-- item two end -->

            <!-- item three start -->
            <div class="col-md-4 col-sm-6 col-xs-12 animated" data-animation="fadeInRight" data-animation-delay="100">
                <div class="content-box content-box-center">
                    <img src="{{ asset('public/assets/img/flat-icon/engineering.svg') }}" alt="svg icon" class="img-responsive icon-svg">
                    <h4 class="color-light">Innovation</h4>
                    <p class="color-light alpha6">Building an innovative technology community is our goal.</p>

                </div>
            </div>
            <!-- item three end -->
        </div>
        <br><br>
    </div>
</div>


<!-- Service Area
       ===================================== -->
<div id="service" class="pt75 pb25">
    <div class="container">

        <!-- title and short description start -->
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="font-size-normal">
                    What We Do
                    <small class="heading heading-solid center-block"></small>
                </h1>
            </div>

            <div class="col-md-8 col-md-offset-2 text-center">
                <p class="lead">
                    We are unrepentant on our love and enthusiasm to build stuffs with technology.
                </p>
            </div>
        </div>
        <!-- title and short description end -->

        <!-- service one start -->
        <div class="row mt75">
            <div class="col-md-6 animated" data-animation="fadeInLeft" data-animation-delay="100">
                <img src="{{ asset('public/assets/img/other/img-other-3.png') }}" alt="website service" class="img-responsive">
            </div>
            <div class="col-md-5 animated" data-animation="fadeIn" data-animation-delay="100">

                <h3 class="font-size-normal">
                    <small class="color-primary">Remote Coding Bootcamp</small>
                    Web Development. Mobile Development. Desktop Development.
                </h3>

                <p class="mt20">
                    We design &amp; develope modern website and app for any type of business. Landing page, ecommerce, company profile, web application, mobile app,
                    anything that you want to make great success.
                </p>
                <p>
                    <i class="fa fa-android fa-2x color-gray2 mr10"></i>
                    <i class="fa fa-desktop fa-2x color-gray2 mr10"></i>
                    <i class="fa fa-internet-explorer fa-2x color-gray2 mr10"></i>
                    <i class="fa fa-apple fa-2x color-gray2 mr10"></i>
                </p>
                <p>
                    <a class="button-o button-sm button-primary hover-fade">Learn From Us</a>
                </p>
            </div>
        </div>
        <!-- service one end -->

        <!-- service two start -->
        <div class="row mt100">
            <div class="col-md-6 col-md-push-6 animated" data-animation="fadeInRight" data-animation-delay="100">
                <img src="{{ asset('public/assets/img/other/img-other-4.png') }}" alt="website service" class="img-responsive">
            </div>
            <div class="col-md-5 col-md-pull-5">

                <h3 class="font-size-normal">
                    <small class="color-success">Software Development</small>
                    Web Development. Mobile Development. Desktop Development.
                </h3>

                <p class="mt20 animated" data-animation="fadeIn" data-animation-delay="100">
                    We design &amp; develope modern website and app for any type of business. Landing page, ecommerce, company profile, web application, mobile app,
                    anything that you want to make great success.
                </p>
                <p>
                    <i class="fa fa-android fa-2x color-gray2 mr10"></i>
                    <i class="fa fa-apple fa-2x color-gray2 mr10"></i>
                    <i class="fa fa-windows fa-2x color-gray2 mr10"></i>
                    <i class="fa fa-desktop fa-2x color-gray2 mr10"></i>
                    <i class="fa fa-internet-explorer fa-2x color-gray2 mr10"></i>
                </p>
                <p>
                    <a class="button-o button-sm button-success hover-fade">Start Project</a>
                </p>
            </div>
        </div>
        <!-- service two end -->

        <!-- service three start -->
        <div class="row mt75">
            <div class="col-md-6 animated" data-animation="fadeInLeft" data-animation-delay="100">
                <img src="{{ asset('public/assets/img/other/img-other-5.jpg') }}" alt="website service" class="img-responsive">
            </div>
            <div class="col-md-5">

                <h3 class="font-size-normal">
                    <small class="color-red">Remote Internship</small>
                    Data Science. Database System. Web, Mobile &amp; Desktop Development.
                </h3>

                <p class="mt20 animated" data-animation="fadeIn" data-animation-delay="100">
                    We design &amp; develope modern website and app for any type of business. Landing page, ecommerce, company profile, web application, mobile app,
                    anything that you want to make great success.
                </p>
                <p>
                    <i class="fa fa-file-image-o fa-2x color-gray2 mr10"></i>
                    <i class="fa fa-object-ungroup fa-2x color-gray2 mr10"></i>
                    <i class="fa fa-paper-plane-o fa-2x color-gray2 mr10"></i>
                    <i class="fa fa-camera-retro fa-2x color-gray2 mr10"></i>
                </p>
                <p>
                    <a class="button-o button-sm button-red hover-fade">Inter with us</a>
                </p>
            </div>
        </div>
        <!-- service three end -->

    </div><!-- container end -->
</div><!-- section service end -->


<div id="price" class="bb-solid-1 bg-dark3 pt75">

    <div class="container pb50">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-4 col-sm-6 col-xs-12 animated" data-animation="pulse" data-animation-delay="300">
                    <div class="price price-one bg-light">
                        <div class="price-header">
                            <h4>Remote</h4>
                            <span style="font-size:28px;" class="color-pasific">Coding Bootcamp</span>
                        </div>
                        <div class="price-body">
                           <p>
                               Easy to understand learning platform with active interactive system for easy and faster learning.
                           </p>
                        </div>
                        <div class="price-footer">
                            <a href="#" class="button button-sm button-rounded button-pasific hover-ripple-out">Learn Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12 animated" data-animation="pulse" data-animation-delay="100">
                    <div class="price price-one active">
                        <div class="price-header">
                            <h4>Get The Best</h4>
                            <span style="font-size:28px;" class="color-purple">You have a project?</span>
                        </div>
                        <div class="price-body">
                           <p>
                               You want a professional web, mobile and desktop development? we are here for you.
                           </p>
                        </div>
                        <div class="price-footer">
                            <a href="#" class="button button-sm button-rounded button-purple hover-ripple-out">Brief us</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12 animated" data-animation="pulse" data-animation-delay="300">
                    <div class="price price-one bg-light">
                        <div class="price-header">
                            <h4>Remote</h4>
                            <span style="font-size:28px;" class="color-blue">Internship</span>
                        </div>
                        <div class="price-body">
                           <p>
                               You want to gain more experience in mobile, web and desktop development
                           </p>
                        </div>
                        <div class="price-footer">
                            <a href="#" class="button button-sm button-rounded button-blue hover-ripple-out">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div><!-- col md end -->
        </div><!-- row end -->
    </div><!-- container end -->
</div>



<div id="client" class="bg-gray pt75 bt-solid-1">
    <div class="container">
        <div class="row">

            <div class="col-md-2 col-sm-3 col-xs-4">
                <img src="{{ asset('public/assets/img/brand/paypal-gray.png')}}" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="350">
            </div>
            <div class="col-md-2 col-sm-3 col-xs-4">
                <img src="{{ asset('public/assets/img/brand/evernote-gray.png')}}" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="300">
            </div>
            <div class="col-md-2 col-sm-3 col-xs-4">
                <img src="{{ asset('public/assets/img/brand/microsoft-gray.png')}}" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="250">
            </div>
            <div class="col-md-2 col-sm-3 col-xs-4">
                <img src="{{ asset('public/assets/img/brand/smashing-gray.png')}}" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="200">
            </div>
            <div class="col-md-2 col-sm-3 col-xs-4">
                <img src="{{ asset('public/assets/img/brand/guardian-gray.png')}}" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="150">
            </div>
            <div class="col-md-2 col-sm-3 col-xs-4">
                <img src="{{ asset('public/assets/img/brand/linkedin-gray.png')}}" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="100">
            </div>

        </div>
    </div>
</div>



@endsection