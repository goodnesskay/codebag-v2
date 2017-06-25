
<footer id="footer" class="footer-one center-block bg-gray pt50 pb25 ">
    <div class="container">
        <div class="row">

            <div class="col-md-2 col-xs-12 mb25">
                <div class="navbar-brand-footer center-block">CodebagNG</div>
                <div class="copyright center-block">{{ config('app.name') }} &copy; <?php echo date('Y'); ?></div>
            </div>

            <div class="col-md-8 col-xs-12 text-center">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="bb-solid-1">
                            <li><a href="{{ url('/') }}#the-problem-we-solve">The Problem We Solve</a></li>
                            <li><a href="{{ url('/') }}#our-solution">Our Solution</a></li>
                            <li><a href="{{ url('portfolio') }}">Our Works</a></li>
                            <li><a href="https://medium.com/@codebagng/">Blog</a></li>
                            <li><a href="{{ url('contact') }}">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-sm-12 mt25">
                        <ul>
                            <li><a href="{{ url('contact') }}">Help Center</a></li>
                            <li><a href="{{ url('/') }}#what-we-do">What We Do</a></li>
                            <li><a href="{{ url('pitch-your-idea') }}">Pitch To Us</a></li>
                            <li><a href="{{ url('faq') }}">FAQs</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-xs-12">
                <div class="social-container">
                    <ul class="footer-social text-center">
                        <li><a href="https://facebook.com/codebagng"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/codebagng"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://instagram.com/codebagng"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://github.com/codebagng"><i class="fa fa-github"></i></a></li>
                        <li><a href="https://linkedin.com/codebagng"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</footer>


<!-- JQuery Core
=====================================-->
<script src="{{ asset('assets/js/core/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>

<!-- Magnific Popup
=====================================-->
<script src="{{ asset('assets/js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/magnific-popup/magnific-popup-zoom-gallery.js') }}"></script>

<!-- Progress Bars
=====================================-->
<script src="{{ asset('assets/js/progress-bar/bootstrap-progressbar.min.js') }}"></script>
<script src="{{ asset('assets/js/progress-bar/bootstrap-progressbar-main.js') }}"></script>

<!-- JQuery Main
=====================================-->
<script src="{{ asset('assets/js/main/jquery.appear.js') }}"></script>
<script src="{{ asset('assets/js/main/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/main/parallax.min.js') }}"></script>
<script src="{{ asset('assets/js/main/jquery.countTo.js') }}"></script>
<script src="{{ asset('assets/js/main/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/main/jquery.sticky.js') }}"></script>
<script src="{{ asset('assets/js/main/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/main/main.js')}}"></script>

</body>


</html>