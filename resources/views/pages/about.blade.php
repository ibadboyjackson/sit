@extends('template')
@section('title')
    A propos | Sit International
@stop
@section('styles')
@stop
@section('scripts')
@stop
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('sit/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">A propos de Nous</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>A propos <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-counter img" id="section-counter" style="background-image: url(sit/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 d-flex">
                        <div class="text d-flex align-items-center">
                            <strong class="number" data-number="30">0</strong>
                        </div>
                        <div class="text-2">
                            <span>Années d'<br>Experiences</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 d-flex">
                        <div class="text d-flex align-items-center">
                            <strong class="number" data-number="1500">0</strong>
                        </div>
                        <div class="text-2">
                            <span>Projects <br>Réussis</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 d-flex">
                        <div class="text d-flex align-items-center">
                            <strong class="number" data-number="100">0</strong>
                        </div>
                        <div class="text-2">
                            <span>Experts <br>Professionels</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 d-flex">
                        <div class="text d-flex align-items-center">
                            <strong class="number" data-number="300">0</strong>
                        </div>
                        <div class="text-2">
                            <span>Clients <br>Heureux</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @foreach($abouts as $about)
        <section class="ftco-section">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url({{ asset("images/$about->image") }});">
                    </div>
                    <div class="col-md-7 wrap-about py-5 px-4 px-md-5 ftco-animate">
                        <div class="heading-section mb-5">
                            <h2 class="mb-4">{{ $about->title }}</h2>
                        </div>
                        <div class="">
                            <p>
                                {{ $about->description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
    <section class="ftco-section testimony-section ftco-no-pt">
        <div class="container">
            <div class="row ftco-animate">
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="heading-section ftco-animate">
                        <span class="subheading">Services</span>
                        <h2 class="mb-4">Expérience de bons services</h2>
                    </div>
                    <div class="services-flow">
                        <div class="services-2 p-4 d-flex ftco-animate">
                            <div class="icon">
                                <span class="flaticon-engineer"></span>
                            </div>
                            <div class="text">
                                <h3>Experts &amp; Professionels</h3>
                                <p>Séparés, ils vivent dans. Une petite rivière appelée Duden coule</p>
                            </div>
                        </div>
                        <div class="services-2 p-4 d-flex ftco-animate">
                            <div class="icon">
                                <span class="flaticon-engineer-1"></span>
                            </div>
                            <div class="text">
                                <h3>Travail de qualité</h3>
                                <p>Séparés, ils vivent dans. Une petite rivière appelée Duden coule</p>
                            </div>
                        </div>
                        <div class="services-2 p-4 d-flex ftco-animate">
                            <div class="icon">
                                <span class="flaticon-engineer-2"></span>
                            </div>
                            <div class="text">
                                <h3>24/7 Support d'Aide</h3>
                                <p>Séparés, ils vivent dans. Une petite rivière appelée Duden coule</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-1 d-xl-block d-none"></div>
                <div class="col-md-6 col-lg-6 col-xl-7">
                    <div class="heading-section ftco-animate mb-5">
                        <span class="subheading">Témoignages</span>
                        <h2 class="mb-4">Client Satisfait</h2>
                        <p>Séparés, ils y habitent. Une petite rivière nommée Duden coule à leur place et lui fournit les regelialia nécessaires. C'est un pays paradisiaque</p>
                    </div>
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="text bg-light p-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                    <p>Au loin, derrière le mot montagnes, loin des pays Vokalia et Consonantia, vivent les textes aveugles.</p>
                                    <p class="name">Racky Henderson</p>
                                    <span class="position">Fermier</span>
                                </div>
                                <div class="user-img" style="background-image: url(sit/images/person_1.jpg)">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="text bg-light p-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                    <p>Au loin, derrière le mot montagnes, loin des pays Vokalia et Consonantia, vivent les textes aveugles.</p>
                                    <p class="name">Henry Dee</p>
                                    <span class="position">Businessman</span>
                                </div>
                                <div class="user-img" style="background-image: url(sit/images/person_2.jpg)">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="text bg-light p-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                    <p>Au loin, derrière le mot montagnes, loin des pays Vokalia et Consonantia, vivent les textes aveugles.</p>
                                    <p class="name">Mark Huff</p>
                                    <span class="position">Etudiant</span>
                                </div>
                                <div class="user-img" style="background-image: url(sit/images/person_3.jpg)">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="text bg-light p-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                    <p>Au loin, derrière le mot montagnes, loin des pays Vokalia et Consonantia, vivent les textes aveugles.</p>
                                    <p class="name">Rodel Golez</p>
                                    <span class="position">Striper</span>
                                </div>
                                <div class="user-img" style="background-image: url(sit/images/person_4.jpg)">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="text bg-light p-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                    <p>Au loin, derrière le mot montagnes, loin des pays Vokalia et Consonantia, vivent les textes aveugles.</p>
                                    <p class="name">Ken Bosh</p>
                                    <span class="position">Manager</span>
                                </div>
                                <div class="user-img" style="background-image: url(sit/images/person_1.jpg)">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @foreach($constructions as $construction)
        <section class="ftco-intro" style="background-image: url({{ asset("images/$construction->image") }});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 text-center">
                        <h2>{{ $construction->title }}</h2>
                        <p>{{ $construction->description }}.</p>
                        <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">En savoir plus sur nous</a></p>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                @foreach($teams as $team)
                    <div class="col-md-8 text-center heading-section ftco-animate">
                        <span class="subheading">{{ $team->category }}</span>
                        <h2 class="mb-4">{{ $team->title }}</h2>
                        <p>{{ $team->description }}</p>
                    </div>
                @endforeach
            </div>
            <div class="row">
                @foreach($members as $member)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="staff">
                            <div class="img-wrap d-flex align-items-stretch">
                                <div class="img align-self-stretch" style="background-image: url({{ asset("images/$member->image") }});"></div>
                            </div>
                            <div class="text pt-3 text-center">
                                <h3>{{ $member->name }}</h3>
                                <span class="position mb-2">{{ $member->function }}</span>
                                <div class="faded">
                                    <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
                                    <ul class="ftco-social text-center">
                                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                        <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


@stop
