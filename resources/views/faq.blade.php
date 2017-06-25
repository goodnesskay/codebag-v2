@extends('layouts.master')

@section('title','Frequently Asked Questions')

@section('content')
<div class="pt100 pb100 bg-grad-mojito">

    <div class="container">
        <div class="row">
            <div class="col-md-12 pt50 text-center">
                <h1 class="brand-heading font-montserrat text-uppercase color-light" data-in-effect="fadeInDown">Frequently Asked Questions.</h1>
            </div>
            <div class="col-md-8 col-md-offset-2 text-center">
                <p class="intro-text color-light text-open-sans text-uppercase mt25" data-in-effect="swing">
                    No answer to your question?. Please to get in touch.<br><br>
                    <a href="{{ url('/contact') }}" class="button-3d button-pasific button-lg hover-ripple-out animated" data-animation="fadeInUp" data-animation-delay="1200">Get In Touch</a>
                </p>
            </div>
        </div>


        <div class="row mt35">

            <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                <div class="panel-group" id="accordion5">

                    <div class="panel">
                        <div class="panel-heading">
                            <a href="#collapse13" class="collapsed accordian-toggle-chevron-left" data-toggle="collapse" data-parent="#accordion5">
                                When do I get contacted after pitching my idea?
                            </a>
                        </div>
                        <div id="collapse13" class="panel-collapse collapse in active">
                            <div class="panel-body">
                                It takes 3 days after submission for you to get any response from us. We are interested in your idea and we want to see it succeed
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-heading">
                            <a href="#collapse14" class="collapsed accordian-toggle-chevron-left" data-toggle="collapse" data-parent="#accordion5">
                                How long does it take to build a product?
                            </a>
                        </div>
                        <div id="collapse14" class="panel-collapse collapse">
                            <div class="panel-body">
                                Every product has its peculiarities and those determine the time frame of the product development but
                                be rest assured that we are interested in your idea and we want to see it succeed
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-heading">
                            <a href="#collapse15" class="collapsed accordian-toggle-chevron-left" data-toggle="collapse" data-parent="#accordion5">
                                Does it mean there is no cost for building my MVP?
                            </a>
                        </div>
                        <div id="collapse15" class="panel-collapse collapse">
                            <div class="panel-body">
                                Building a product will definitely cost you but because we want to see your product succeed
                                and come out fast, we will have a discussion that will be awesome for you and the business.
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-heading">
                            <a href="#collapse16" class="collapsed accordian-toggle-chevron-left" data-toggle="collapse" data-parent="#accordion5">
                                Any other benefits my business gets apart from building an MVP?
                            </a>
                        </div>
                        <div id="collapse16" class="panel-collapse collapse">
                            <div class="panel-body">
                                Yes!!! We will introduce you to investors that will love to invest in your business. Your business will also get
                                other supports from the company till the company can stand on her own.
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-heading">
                            <a href="#collapse17" class="collapsed accordian-toggle-chevron-left" data-toggle="collapse" data-parent="#accordion5">
                                Which area should my solution or idea cut-across?
                            </a>
                        </div>
                        <div id="collapse17" class="panel-collapse collapse">
                            <div class="panel-body">
                                There are no restrictions to the area of the problem you are trying to solve
                                but your solution can revolve around Education,Health,Energy,Finance,Agriculture,Employment and so on
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection