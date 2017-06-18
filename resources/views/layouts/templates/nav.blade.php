<body  id="page-top" data-spy="scroll" data-target=".navbar" data-offset="100">

<!-- Page Loader
===================================== -->
<div id="pageloader">
    <div class="loader-item">
        <img src="{{ asset('assets/img/other/puff.svg')}}" alt="page loader">
    </div>
</div>

<a href="#page-top" class="go-to-top">
    <i class="fa fa-long-arrow-up"></i>
</a>


<!-- Navigation Area
===================================== -->
<nav class="navbar navbar-pasific navbar-mp navbar-standart megamenu navbar-fixed-top" style="border-bottom: 1px solid #eee;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="{{url('/')}}">
                <img src="{{ asset('assets/img/logo/logo-default.png')}}" alt="logo">
                Codebag
            </a>
        </div>

        <div class="navbar-collapse collapse navbar-main-collapse">
            <ul class="nav navbar-nav">

                <li ><a href="{{url('blog')}}" class="dropdown-toggle color-light">Blog </a>
                </li>

                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle color-light">Internship</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{url('/codebag-internship')}}"><i class="fa fa-spinner"></i>Internship Overview</a></li>
                        <li><a href="{{url('/codebag-internship-register')}}"><i class="fa fa-spinner"></i>Join Us</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle color-light">Learn</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{url('/codebag-nation')}}"><i class="fa fa-spinner"></i>Learning Overview</a></li>
                        <li><a href="{{url('/codebag-nation-register')}}"><i class="fa fa-spinner"></i>Join Us</a></li>
                    </ul>
                </li>

                <li><a href="{{url('faq')}}"  class="dropdown-toggle color-light">FAQ</a>
                </li>

                <li><a href="{{url('contact')}}" class="dropdown-toggle color-light">Contact</a>
                </li>

            </ul>

        </div>
    </div>
</nav>


