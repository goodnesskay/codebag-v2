@extends('layouts.master')

@section('title','Brief Us About Your Project')

@section('content')
<div class="pt100 pb100 bg-grad-mojito">

    <div class="container">
        <div class="row">
            <div class="col-md-12 pt50 text-center">
                <h1 class="brand-heading font-montserrat text-uppercase color-light" data-in-effect="fadeInDown">Tell us about your project?</h1>
            </div>
        </div>

    </div>
</div>

<div id="about" class="pt75 pb50">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <img src="{{ asset('assets/img/other/img-other-6.png') }}" alt="CodebagNG" class="img-responsive center-block">
            </div>
            <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12 text-center">
                <h4>
                    We build better softwares
                    <small class="heading heading-solid center-block"></small>
                </h4>
                <p>
                    We have skilled Engineers and Expert Designers that can give you the best of service you deserve. All you need to do is
                    <br> <b>Brief us</b> on your project by filling the form below or <b>Contact us</b>
                </p>
                <a class="button button-md button-pasific mt20 hover-ripple-out animated" data-animation="slideInRight" data-animation-delay="100">Fill Form</a>


            </div>

        </div>


    </div>
</div>


@endsection