<body  id="topPage" data-spy="scroll" data-target=".navbar" data-offset="100">


<!-- Page Loader
===================================== -->
<div id="pageloader">
    <div class="loader-item">
        <img src="{{asset('public/assets/img/other/puff.svg') }}" alt="page loader">
    </div>
</div>

<a href="#page-top" class="go-to-top">
    <i class="fa fa-long-arrow-up"></i>
</a>


<!-- Navigation Area
===================================== -->
<nav class="navbar navbar-pasific navbar-mp megamenu navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">
                <img src="{{asset('public/assets/img/logo/logo-default.png') }}" alt="logo">
                Codebag
            </a>
        </div>

        <div class="navbar-collapse collapse navbar-main-collapse">
            <ul class="nav navbar-nav">

                <li ><a href="{{url('blog')}}"  class="dropdown-toggle color-light">Blog </a>
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

                <li class="dropdown"><a href="{{url('faq')}}" data-toggle="dropdown" class="dropdown-toggle color-light">FAQ</a>
                </li>

                <li class="dropdown"><a href="{{url('contact')}}" data-toggle="dropdown" class="dropdown-toggle color-light">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Search Modal Dialog Box
===================================== -->
<div id="searchModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title text-center"><i class="fa fa-search fa-fw"></i> Search here</h5>
            </div>
            <div class="modal-body">
                <form action="#" class="inline-form">
                    <input type="text" class="modal-search-input" autofocus>
                </form>
            </div>
            <div class="modal-footer bg-gray">
                <span class="text-center"><a href="#" class="color-dark">Advanced Search</a></span>
            </div>
        </div>

    </div>
</div>
