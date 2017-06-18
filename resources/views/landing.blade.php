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


<div id="faqs" class="bg-gray pt50 pb20 bt-solid-1">
    <div class="container">
        <div class="row">
            <h3 class="text-center mb50">
                Codebag
                <small class="heading-desc text-lowercase">
                    Solving problems through code
                </small>
                <small class="heading heading-solid center-block"> </small>
            </h3>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2 mb30">
                <p>
We are team of talented software developers and ... driven with the zeal of solving problems through writing codes.
                    <br>
                    We do this by developing top notch software application ranging from web, mobile to desktop. We believe in the
                    future of technology and that is why we also work on Artificial Intelligence, Virtual Reality, Machine Learning and others.
                    <br>
                    We are passionate about start-ups and believe in turning ideas to  startup.
                </p>
            </div>
            <div>
                <p>
                    A lot of problem solving start-up ideas die at an early stage due to funding. <br>
                    A lot of promising start-ups die because of poor technology strength or poor development team
                    at an early stage.
                    <br>
                    Some people think up solutions of problems but are not sure how to test if the idea is valid
                    and how to turn it to a business.
                </p>

                <p>
                    The solution we provide is simple. We help you build your product (Minimum Viable Product) at an affordable
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