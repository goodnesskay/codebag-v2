@extends('layouts.master')

@section('title','Our Works')

@section('content')
<div class="pt100 pb100 bg-grad-mojito" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 pt50 text-center">
                <h1 class="brand-heading font-montserrat text-uppercase color-light" data-in-effect="fadeInDown">Our Works.</h1>
            </div>
        </div>
    </div>
</div>
<div id="portfolioGrid">
    <div class="container-fluid bg-gray pt30">
        <div class="row">
            <div class="col-md-12">
                <div class="portfolio center-block">
                    <!-- portfolio item one start -->
                    <div class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-xs-12 " data-category="">
                        <a href="assets/img/portfolio/preview/1.jpg" class="magnific-popup">
                            <span class="glyphicon glyphicon-search hover-bounce-out"></span><br>
                            <span>Project Name</span>
                        </a>
                        <img src="assets/img/portfolio/thumbs/img-550x350-1.jpg" alt="CodebagNG" class="img-responsive">
                    </div>

                    <div class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
                        <a href="assets/img/portfolio/preview/2.jpg" class="magnific-popup">
                            <span class="glyphicon glyphicon-search hover-bounce-out"></span>
                        </a>
                        <img src="assets/img/portfolio/thumbs/img-550x350-3.jpg" alt="CodebagNG" class="img-responsive">
                    </div>

                    <div class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
                        <a href="assets/img/portfolio/preview/img-370x165-1.jpg" class="magnific-popup">
                            <span class="glyphicon glyphicon-search hover-bounce-out"></span>
                        </a>
                        <img src="assets/img/portfolio/thumbs/img-550x350-2.jpg" alt="CodebagNG" class="img-responsive">
                    </div>

                    <div class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
                        <a href="assets/img/portfolio/preview/3.jpg" class="magnific-popup">
                            <span class="glyphicon glyphicon-search hover-bounce-out"></span>
                        </a>
                        <img src="assets/img/portfolio/thumbs/img-550x350-4.jpg" alt="CodebagNG" class="img-responsive">
                    </div>

                </div><!-- portfolio end -->

            </div><!-- col-md-12 end -->
        </div><!-- row end -->
    </div><!-- container end -->
</div><!-- section portfolio end -->


@endsection