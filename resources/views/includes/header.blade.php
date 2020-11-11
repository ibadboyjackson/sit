<body>
<div class="container">
    @if(Session::has('success'))
        <div class="alert alert-success my-5">
            {{ Session::get('success') }}
        </div>
    @endif
</div>
<div class="bg-top navbar-light">
    <div class="container">
        <div class="row no-gutters d-flex align-items-center align-items-stretch">
            <div class="col-md-4 d-flex align-items-center py-4">
                <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('uploads/232x52px.png') }}" alt="" width="242" height="62"></a>
            </div>
            <div class="col-lg-8 d-block">
                <div class="row d-flex">
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                        <div class="text d-flex align-items-center">
                            <span>contact@sitinternational.ch</span>
                        </div>
                    </div>
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                        <div class="text d-flex align-items-center">
                            <span>Contact: +237 233437813</span>
                        </div>
                    </div>
                    <div class="col-md topper d-flex align-items-center align-items-stretch">
                        <p class="mb-0 d-flex d-block">
                            <a href="{{ route('home.job') }}" class="btn btn-primary d-flex align-items-center justify-content-center">
                                <span>Offre d'emplois</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <form action="{{ route('blog') }}" class="searchform order-lg-last">
            @csrf
            <div class="form-group d-flex">
                <input type="text" class="form-control pl-3" placeholder="Recherche">
                <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
            </div>
        </form>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('home') }}" class="nav-link pl-0">Acceuil</a></li>
                <li class="nav-item {{ Request::is('apropos') ? 'active' : '' }}"><a href="{{ route('about') }}" class="nav-link">A propos</a></li>
                <li class="nav-item {{ Request::is('projets') ? 'active' : '' }}"><a href="{{ route('project') }}" class="nav-link">Projets</a></li>
                <li class="nav-item {{ Request::is('blog') ? 'active' : '' }}"><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
                <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
