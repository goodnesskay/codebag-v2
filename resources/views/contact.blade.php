@extends('layouts.master-2')

@section('title','Get in Touch')

@section('content')
<div class="pt100 pb100 bg-grad-mojito">

    <div class="container">
        <div class="row">
            <div class="col-md-12 pt50 text-center">
                <h1 class="brand-heading font-montserrat text-uppercase color-light" data-in-effect="fadeInDown">Get in Touch.</h1>
            </div>
            <div class="col-md-8 col-md-offset-2 text-center">
                <form class="form-horizontal">
                    <label class="sr-only" for="inputHelpBlock">Input with help text</label>
                    <input type="text" id="inputHelpBlock" class="form-control input-circle input-lg no-border text-center">
                </form>

                <p class="intro-text color-light text-open-sans text-uppercase mt25" data-in-effect="swing">
                    Quick Response.<br><br>
                    <a class="button-3d button-pasific button-lg hover-ripple-out animated" data-animation="fadeInUp" data-animation-delay="1200">Submit Ticket</a>
                </p>
            </div>
        </div>

    </div>
</div>
@endsection