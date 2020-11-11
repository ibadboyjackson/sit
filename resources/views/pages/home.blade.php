@extends('template')
@section('title')
    Sit International | Acceuil
@stop
@section('styles')
@stop
@section('scripts')
@stop
@section('content')
    @if(Session::has('errors'))
        <div class="alert alert-danger my-5">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @foreach($slides as $slide)
        <section class="home-slider owl-carousel">
            <div class="slider-item" style="background-image:url({{ asset("images/$slide->image") }});" data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                        <div class="col-md-6 text ftco-animate pl-md-5">
                            <h1 class="mb-4">{{ $slide->title }}<span></span></h1>
                            <h3 class="subheading">{{ $slide->description }}</h3>
                            <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Voir les avancées</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    @endforeach
    <section class="ftco-section ftco-no-pt ftco-margin-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="request-quote">
                        <div class="bg-primary py-4">
                            <span class="subheading">FAITES PARTIE DE NOTRE AFFAIRE</span>
                            <h3>Demander un devis</h3>
                        </div>


                        <div class="mt-2">
                            @include('includes.form')
                        </div>

                    </div>
                </div>
                @foreach($betas as $beta)
                    <div class="col-md-8 wrap-about py-5 ftco-animate">
                        <div class="heading-section mb-5">
                            <h2 class="mb-4">{{ $beta->title }}</h2>
                        </div>
                        <div class="">
                            <p class="mb-5">{{ $beta->content }}</p>
                            <p><a href="#" class="btn btn-secondary px-5 py-3">Lire la suite</a></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="ftco-services ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                @foreach($services as $service)
                    <div class="col-md-8 text-center heading-section ftco-animate">
                        <span class="subheading">{{ $service->category }}</span>
                        <h2 class="mb-4">{{ $service->title }}</h2>
                        <p>{{ $service->description }}</p>
                    </div>
                @endforeach
            </div>
            <div class="row">
                @foreach($seattles as $seattle)
                    <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                        <div class="media block-6 d-block text-center">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-hook"></span>
                            </div>
                                <div class="media-body p-2 mt-3">
                                    <h3 class="heading">{{ $seattle->title }}</h3>
                                    <p>{{ $seattle->content }}.</p>
                                </div>
                        </div>
                    </div>
                @endforeach
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
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container-fluid p-0">
            <div class="row no-gutters justify-content-center mb-5 pb-2">
                @foreach($projectors as $projector)
                    <div class="col-md-6 text-center heading-section ftco-animate">
                        <span class="subheading">{{ $projector->category }}</span>
                        <h2 class="mb-4">{{ $projector->title }}</h2>
                        <p>{{ $projector->description }}</p>
                    </div>
                @endforeach
            </div>


            <div class="row no-gutters">

                @foreach($projects as $project)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="project">
                            <img src="{{ asset("images/$project->image") }}" class="img-fluid" alt="Colorlib Template">
                            <div class="text">
                                <span>{{ $project->category }}</span>
                                <h3><a href="#">{{ $project->title }}</a></h3>
                            </div>
                            <a href="{{ asset("images/$project->image") }}" class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="icon-expand"></span>
                            </a>
                        </div>
                    </div>
                @endforeach
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
                            <span>Années d' <br>Experiences</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 d-flex">
                        <div class="text d-flex align-items-center">
                            <strong class="number" data-number="1500">0</strong>
                        </div>
                        <div class="text-2">
                            <span>Project <br>Reussi</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 d-flex">
                        <div class="text d-flex align-items-center">
                            <strong class="number" data-number="100">0</strong>
                        </div>
                        <div class="text-2">
                            <span>Expert <br> Professionel </span>
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
    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row ftco-animate">
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="heading-section ftco-animate">
                        <span class="subheading">Services</span>
                        <h2 class="mb-4">Expérimentez d'excellents services</h2>
                    </div>
                    <div class="services-flow">
                        <div class="services-2 p-4 d-flex ftco-animate">
                            <div class="icon">
                                <span class="flaticon-engineer"></span>
                            </div>
                            <div class="text">
                                <h3>Expert &amp; Professionel</h3>
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
                                <h3>24/7 Support d'aide</h3>
                                <p>Séparés, ils vivent dans. Une petite rivière appelée Duden coule</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-1 d-xl-block d-none"></div>
                <div class="col-md-6 col-lg-6 col-xl-7">
                    <div class="heading-section ftco-animate mb-5">
                        <span class="subheading">Témoignages</span>
                        <h2 class="mb-4">Client satisfait</h2>
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
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">Blog</span>
                    <h2 class="mb-4">Les Derniers Posts</h2>
                    <p>SIT International met cotidiennement à jour ses articles de blog pour vous tenir au courant des informations les plus utiles</p>
                </div>
            </div>
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-4 ftco-animate">
                        <div class="blog-entry">
                            <a href="{{ route('blog.single', $post->slug) }}" class="block-20" style="background-image: url('{{ asset("images/$post->image") }}');">
                                <div class="meta-date text-center p-2">
                                    <span class="day"><strong>{{ date('j',strtotime($post->created_at)) }}</strong></span>
                                    <span class="mos"><strong>{{ date('M',strtotime($post->created_at)) }}</strong></span>
                                    <span class="yr"><strong>{{ date('Y',strtotime($post->created_at)) }}</strong></span>
                                </div>
                            </a>
                            <div class="text pt-4">
                                <h3 class="heading"><a href="{{ route('blog.single', $post->slug) }}">{{ $post->title }}</a></h3>
                                <p>{{ substr($post->content, 0, 110) }}.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary">Lire la suite <span class="ion-ios-arrow-round-forward"></span></a></p>
                                    <p class="ml-auto mb-0">
                                        <a href="{{ route('blog.single', $post->slug) }}" class="mr-2">{{ $post->author }}</a>
                                        <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@stop
