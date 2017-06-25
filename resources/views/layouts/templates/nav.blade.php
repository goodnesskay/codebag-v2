<body  id="page-top" data-spy="scroll" data-target=".navbar" data-offset="100">

<div id="pageloader">
    <div class="loader-item">
        <img src="{{ asset('assets/img/other/puff.svg')}}" alt="page loader">
    </div>
</div>

<a href="#page-top" class="go-to-top">
    <i class="fa fa-long-arrow-up"></i>
</a>

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
                <li><a href="{{url('portfolio')}}"  class="color-light">Portfolio</a>
                </li>
                <li ><a href="https://medium.com/@codebagng/" class="color-light">Blog </a>
                </li>
                <li><a href="{{url('contact')}}" class="color-light">Contact</a>
                </li>
            </ul>
            <a class="button button-sm button-pasific hover-ripple-out mt10 mr10" href="{{ url('pitch-your-idea') }}">Pitch</a>
            <a class="button button-sm button-primary hover-ripple-out mt10 mr10" href="{{ url('brief-us') }}">Brief Us</a>
        </div>
    </div>
</nav>


