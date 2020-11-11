@extends('template')
@section('title')
    Jobs | Sit International
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
                    <h1 class="mb-2 bread">Offres d'emplois</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>Offres d'emplois <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        @if(Session::has('success'))
            <div class="alert alert-success my-5">
                {{ Session::get('success') }}
            </div>
        @endif
    </div>
    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
        <div class="container">
            <div class="row d-flex align-items-stretch no-gutters">
                <div class="col-md-12 p-4 p-md-5 order-md-last bg-light">
                    <form action="{{ route('job.post') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Nom">
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" placeholder="Sujet">
                            @if ($errors->has('subject'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('subject') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" cols="30" rows="7" class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" placeholder="Votre message"></textarea>
                            @if ($errors->has('message'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('message') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Postuler" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4">Contact Information</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3 d-flex">
                    <div class="bg-light d-flex align-self-stretch box p-4">
                        <p><span>Adresse:</span> 198 West 21th Street, Suite 721 Swiss CH 10016</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="bg-light d-flex align-self-stretch box p-4">
                        <p><span>Téléphone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="bg-light d-flex align-self-stretch box p-4">
                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">contact@sitinternational.ch</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="bg-light d-flex align-self-stretch box p-4">
                        <p><span>Site Web</span> <a href="/">sitinternational.ch</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
