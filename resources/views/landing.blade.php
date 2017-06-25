@extends('layouts.master')

@section('title','Build A Minimum Viable Product for your start-up with ease')

@section('content')
<header class="intro parallax-window" data-parallax="scroll" data-speed=".2" data-position-x="right" data-image-src="assets/img/bg/img-bg-22.jpg">
    <div class="intro-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-offset-1 text-left">
                    <h1 class="font-montserrat text-capitalize color-light mb25 animated" data-animation="fadeInUp" data-animation-delay="100">
                        Build A Minimum Viable Product for your start-up with ease
                    </h1>
                    <p class="intro-text button-pasific animated" data-animation="fadeInUp" data-animation-delay="200">
                        Why allow your brilliant ideas of making the world <br>
                        better die because of no means of pushing it
                    </p>
                    <a href="{{ url('pitch-your-idea') }}" class="button button-md button-pasific hover-ripple-out mt10 mr10">Pitch To Us</a>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="welcome" class="pt75 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="font-size-normal text-uppercase color-light">
                    <small class="color-pasific alpha10">Solving problem through codes</small>

                    <small class="heading heading-solid center-block"></small>
                </h1>
            </div>
            <!-- title description start -->
            <div class="col-md-8 col-md-offset-2 text-center">
                <p class="color-dark2 alpha6">
                <span class="lead color-dark2">
                    <strong>
                        We are team of talented technology experts driven with the zeal of solving problems through writing codes.
                    </strong>
                </span><br><br>
                    We do this by developing top notch software applications ranging from web, mobile to desktop. We believe in the
                    future of technology and that is why we are committed to turning ideas into products that solve problems.
                    <br>
                    We are passionate about start-ups and believe in turning ideas to  startup.
                </p>
                <br><br>
            </div>
            <!-- title description end -->
        </div>
    </div>
</div>

<div id="the-problem-we-solve" class="pt75 pb25">
    <div class="container">
        <div class="row mt75">
            <div class="col-md-6 animated" data-animation="fadeInLeft" data-animation-delay="100">
                <img src="assets/img/other/img-other-3.png" alt="website service" class="img-responsive">
            </div>
            <div id="the-problem-we-solve" class="col-md-5 animated" data-animation="fadeIn" data-animation-delay="100">

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

        <div id="our-solution" class="row mt100">
            <div class="col-md-6 col-md-push-6 animated" data-animation="fadeInRight" data-animation-delay="100">
                <img src="assets/img/other/img-other-4.png" alt="website service" class="img-responsive">
            </div>
            <div  class="col-md-5 col-md-pull-5">

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

<div id="how-it-works" class="pt75 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="font-size-normal text-uppercase color-light">
                    <small class="color-pasific alpha10">How It  Works</small>
                    <span style="font-size:18px;" class="color-dark2">Solve your problem in 3 easy steps</span>
                    <small class="heading heading-solid center-block"></small>
                </h1>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-6 text-center mb50">
                <img src="assets/img/app/img-app-3.png" alt="mobile app" class="img-responsive center-block">
                <h5>
                </h5>
                <p>
                    Pitch your idea to us and be rest assured <br>
                    we have your interest at heart.
                </p>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-6 text-center mb50">
                <img src="assets/img/app/img-app-4.png" alt="mobile app" class="img-responsive center-block">
                <h5>
                </h5>
                <p>
                    We will get back to you in 3 days <br>
                    and processes will begin.
                 </p>

            </div>

            <div class="col-md-4 col-sm-4 col-xs-6 text-center mb50">
                <img src="assets/img/app/img-app-5.png" alt="mobile app" class="img-responsive center-block">
                <h5>
                </h5>
                <p>
                    Hurray!!! your product is ready <br>
                    to solve the world's problem.
                </p>
            </div>

        </div>
    </div>
</div>

<div id="fact" class="bg-grad-bora pt75 pb75">
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12 col-sm-6 col-xs-6">
                        <div class="fact">
                            <div class="fact-number timer" data-perc="30">
                                <span class="factor color-black"></span>
                            </div>
                            <span class="fact-title">Happy Clients</span>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6 col-xs-6">
                        <div class="fact">
                            <div class="fact-number timer" data-perc="25">
                                <span class="factor color-black"></span>
                            </div>
                            <span class="fact-title">Projects</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-md-push-6">
                <div class="row">
                    <div class="col-md-12 col-sm-6 col-xs-6">
                        <div class="fact">
                            <div class="fact-number timer" data-perc="20">
                                <span class="factor color-black"></span>
                            </div>
                            <span class="fact-title">Reviews</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-md-pull-3">
                <img src="assets/img/other/map.png" alt="macbook" class="img-responsive">
            </div>

        </div>

        <div class="row">
            <div class="col-sm-8 col-sm-push-2 text-center">
                <h4 class="pt25">
                    Have an idea or a project?
                </h4>
                <p class="pb10">
                    We are here to help you build your problem-solving idea into a product that people will love. <br>
                    If you have a project for us, you can brief us too.
                </p>
                <a href="{{ url('pitch-your-idea') }}" class="button button-md button-pasific hover-ripple-out">Pitch to us</a>
            </div>
        </div>

    </div>
</div>


<br><br>
<div id="what-we-do" class="">
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
                    <h5>Web Development</h5>
                    <p>
                        We build top-notch scalable and functional web applications that meets your need.<br><br>
                        <a href="{{ url('brief-us') }}" class="button button-sm button-pasific hover-ripple-out">Brief Us</a>
                    </p>

                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 mb35">
                <div class="content-box content-box-o content-box-center">
                    <span class="icon-mobile color-pasific"></span>
                    <h5>Mobile App. Development</h5>
                    <p>
                        We are professionals at building top class mobile application.<br><br>
                        <a href="{{ url('brief-us') }}" class="button button-sm button-pasific hover-ripple-out">Brief Us</a>
                    </p>

                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 mb35">
                <div class="content-box content-box-o content-box-center">
                    <span class="icon-desktop color-pasific"></span>
                    <h5>Desktop App. Development</h5>
                    <p>
                        We are masters of developing top class desktop applications.<br><br>
                        <a href="{{ url('brief-us') }}" class="button button-sm button-pasific hover-ripple-out">Brief Us</a>
                    </p>

                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 mb35">
                <div class="content-box content-box-o content-box-center">
                    <span class="icon-desktop color-pasific"></span>
                    <h5>Visuals</h5>
                    <p>
                        We can turn your ideas to masterpiece designs.<br><br>
                        <a href="{{ url('brief-us') }}" class="button button-sm button-pasific hover-ripple-out">Brief Us</a>
                    </p>

                </div>
            </div>
        </div>

    </div>
</div>


@endsection