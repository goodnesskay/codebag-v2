@extends('layouts.master')

@section('title','Build A Minimum Viable Product for your start-up with ease')

@section('content')

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
                    <img src="{{ asset('assets/img/bg/img-bg-29.png') }}" style="margin-top:15%" class="img-responsive" alt="">
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
                    Solving problem through codes
                    <small class="heading heading-solid center-block"></small>
                </h1>
            </div>
            <!-- title description start -->
            <div class="col-md-8 col-md-offset-2 text-center">
                <p class="color-light alpha6">
                <span class="lead color-light">
                    <strong>
                        We are team of talented software developers and ... driven with the zeal of solving problems through writing codes.
                    </strong>
                </span><br><br>
                    We do this by developing top notch software application ranging from web, mobile to desktop. We believe in the
                    future of technology and that is why we also work on Artificial Intelligence, Virtual Reality, Machine Learning and others.
                    <br>
                    We are passionate about start-ups and believe in turning ideas to  startup.
                </p>
                <br><br>
            </div>
            <!-- title description end -->
        </div>
    </div>
</div>

<div id="service" class="pt75 pb25">
    <div class="container">
        <div class="row mt75">
            <div class="col-md-6 animated" data-animation="fadeInLeft" data-animation-delay="100">
                <img src="assets/img/other/img-other-3.png" alt="website service" class="img-responsive">
            </div>
            <div class="col-md-5 animated" data-animation="fadeIn" data-animation-delay="100">

                <h3 class="font-size-normal text-uppercase">
                    <small class="color-primary">The problem we are trying to solve</small>
                    We want to help solve the basic problem of pain-point problem solving thinkers.
                </h3>

                <p class="mt20">
                    A lot of problem solving start-up ideas die at an early stage due to funding. <br>
                    A lot of promising start-ups die because of poor technology strength or poor development team
                    at an early stage.
                    <br>
                    Some people think up solutions of problems but are not sure how to test if the idea is valid
                    and how to turn it to a business.
                </p>
            </div>
        </div>

        <div class="row mt100">
            <div class="col-md-6 col-md-push-6 animated" data-animation="fadeInRight" data-animation-delay="100">
                <img src="assets/img/other/img-other-4.png" alt="website service" class="img-responsive">
            </div>
            <div class="col-md-5 col-md-pull-5">

                <h3 class="font-size-normal text-uppercase">
                    <small class="color-success">The Solution we provide</small>
                    The solution we provide is simple.
                </h3>

                <p class="mt20 animated" data-animation="fadeIn" data-animation-delay="100">
                    We help you build your product (Minimum Viable Product) at an affordable
                    price or at no price cost. We also help scrutinize your idea to know if it is viable and can be turned
                    into a business.
                    <br>
                    We also help young start-ups stabilize their development team.
                    <br>
                    Finally, we follow up your start-up until it succeeds providing support for the start-up until
                    it can stand on its own.
                </p>
            </div>
        </div>
    </div>
</div>

<div id="team" class="">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h4 class="text-center text-uppercase font-montserrat color-dark">
                    What We Do
                    <small class="heading-desc ">
                        We solve societal problems by providing technological solutions
                    </small>
                    <small class="heading heading-solid center-block"> </small>
                </h4>
            </div>
        </div>

        <div class="row mt50 mb50 container-team">
            <div class="col-md-3 col-sm-6 col-xs-12 mb35">
                <div class="content-box content-box-o content-box-center">
                    <span class="icon-desktop color-pasific"></span>
                    <h5>Website Design</h5>
                    <p>
                        Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.<br><br>
                        <a href="#" class="button button-sm button-pasific hover-ripple-out">Learn More</a>
                    </p>

                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 mb35">
                <div class="content-box content-box-o content-box-center">
                    <span class="icon-mobile color-pasific"></span>
                    <h5>Mobile Optimzed</h5>
                    <p>
                        Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.<br><br>
                        <a href="#" class="button button-sm button-pasific hover-ripple-out">Learn More</a>
                    </p>

                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 mb35">
                <div class="content-box content-box-o content-box-center">
                    <span class="icon-tools color-pasific"></span>
                    <h5>Easy to Customize</h5>
                    <p>
                        Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.<br><br>
                        <a href="#" class="button button-sm button-pasific hover-ripple-out">Learn More</a>
                    </p>

                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 mb35">
                <div class="content-box content-box-o content-box-center">
                    <span class="icon-wallet color-pasific"></span>
                    <h5>Save Your Money</h5>
                    <p>
                        Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.<br><br>
                        <a href="#" class="button button-sm button-pasific hover-ripple-out">Learn More</a>
                    </p>

                </div>
            </div>
        </div>

    </div>
</div>

<div id="client" class="bg-gray pt75 bt-solid-1">
    <div class="container">
        <div class="row">

            <div class="col-md-2 col-sm-3 col-xs-4">
                <img src="{{ asset('assets/img/brand/paypal-gray.png')}}" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="350">
            </div>
            <div class="col-md-2 col-sm-3 col-xs-4">
                <img src="{{ asset('assets/img/brand/evernote-gray.png')}}" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="300">
            </div>
            <div class="col-md-2 col-sm-3 col-xs-4">
                <img src="{{ asset('assets/img/brand/microsoft-gray.png')}}" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="250">
            </div>
            <div class="col-md-2 col-sm-3 col-xs-4">
                <img src="{{ asset('assets/img/brand/smashing-gray.png')}}" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="200">
            </div>
            <div class="col-md-2 col-sm-3 col-xs-4">
                <img src="{{ asset('assets/img/brand/guardian-gray.png')}}" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="150">
            </div>
            <div class="col-md-2 col-sm-3 col-xs-4">
                <img src="{{ asset('assets/img/brand/linkedin-gray.png')}}" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="100">
            </div>

        </div>
    </div>
</div>



@endsection