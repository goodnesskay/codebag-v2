@extends('layouts.master')

@section('title','Get in Touch')

@section('content')
<div class="pt100 pb100 bg-grad-mojito">

    <div class="container">
        <div class="row">
            <div class="col-md-12 pt50 text-center">
                <h1 class="brand-heading font-montserrat text-uppercase color-light" data-in-effect="fadeInDown">Get in Touch.</h1>
            </div>
        </div>

    </div>
</div>

<div id="contact" class="pt75 pb75 bg-grad-day-tripper bt-solid-1">
    <div class="container">
        <div class="row mt50">
            <div class="col-md-6">
                <div class="row">

                    <!-- title start -->
                    <div class="col-md-12 mb50">
                        <h1 class="font-size-normal color-light">
                            <small class="color-light">Contact Us</small>
                            Drop Us a Message
                        </h1>
                        <h5 class="color-light">Please feel free to say anything to us. Our staff will reply any message<br>as soon as possible.</h5>
                    </div>
                    <!-- title end -->

                    <div class="col-md-4 col-sm-4 col-xs-7">
                        <span class="icon-megaphone color-light el-icon2x"></span>
                        <h5 class="color-light"><strong>Mobile Number</strong></h5>
                        <p class="color-light">081 8846 9520</p>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-7">
                        <span class="icon-envelope color-light el-icon2x"></span>
                        <h5 class="color-light"><strong>Email</strong></h5>
                        <p class="color-light">hello@codebagng.com</p>
                    </div>
                    <!-- contact info end -->

                </div><!-- row left end -->
            </div>
            <div class="col-md-6">
            <div class="contact contact-us-one">
                <div class="col-sm-12 col-xs-12 text-center mb20">
                    <h4 class="pb25 bb-solid-1 text-uppercase">
                        Get in Touch
                        <small class="text-lowercase">Please complete the form and we will get back to you.</small>
                    </h4>
                </div>

                <form name="contactform" id="contactForm" method="post" action="">

                    <!-- sender name start -->
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="senderName" id="senderName" class="input-md input-rounded form-control" placeholder="fullname" maxlength="100" required>
                        </div>
                    </div>
                    <!-- sender name end -->

                    <!-- sender email start -->
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input type="email" name="senderEmail" id="senderEmail" class="input-md input-rounded form-control" placeholder="email address" maxlength="100" required>
                        </div>
                    </div>
                    <!-- sender email end -->

                    <!-- mobille number start -->
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input type="tel" name="senderHuman" id="" class="input-md input-rounded form-control" placeholder="Mobile Number" required>
                        </div>
                    </div>
                    <!-- security check human end -->

                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <textarea class="form-control" name="message" id="message" rows="7" required></textarea>
                        <button type="submit" name="sendMessage" id="sendMessage" class="button-3d button-md button-pasific hover-ripple-out mt20 center-block">Send Message</button>
                    </div>

                </form>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection