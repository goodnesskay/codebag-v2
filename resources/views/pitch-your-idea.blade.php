@extends('layouts.master')

@section('title','Pitch Your Idea')

@section('content')
    <div class="pt100 pb100 bg-grad-mojito">

        <div class="container">
            <div class="row">
                <div class="col-md-12 pt50 text-center">
                    <h1 class="brand-heading font-montserrat text-uppercase color-light" data-in-effect="fadeInDown">Pitch To Us.</h1>
                    <p class="color-light">You can be sure that your idea is safe with us and we will surely get back to you.</p>
                </div>
            </div>

        </div>
    </div>

    <div id="contact" class="pt75 pb75 bt-solid-1">
        <div class="container">
            <div class="row mt50">
                <div class="col-md-12">
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

@endsection